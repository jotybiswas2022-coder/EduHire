<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',

        // Personal
        'name', 'father_name', 'mother_name', 'dob', 'gender', 'image',

        // Contact
        'number', 'email', 'division', 'district', 'current_address', 'permanent_address',

        // Education
        'ssc_board', 'ssc_result', 'ssc_year', 'hsc_result', 'bachelor_degree', 'master_degree', 'subject_major',

        // Teaching
        'preferred_subject', // JSON array
        'preferred_class',   // JSON array
        'experience', 'previous_school', 'salary',

        // Status
        'status',
    ];

    protected $casts = [
        'dob' => 'date',
        'preferred_subject' => 'array',
        'preferred_class' => 'array',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor to always return array for preferred_class
    public function getPreferredClassIdsAttribute()
    {
        $value = $this->preferred_class;
        if (is_array($value)) return $value;
        if (empty($value)) return [];
        // If comma separated string
        return array_map('trim', explode(',', $value));
    }

    // Accessor to always return array for preferred_subject
    public function getPreferredSubjectIdsAttribute()
    {
        $value = $this->preferred_subject;
        if (is_array($value)) return $value;
        if (empty($value)) return [];
        return array_map('trim', explode(',', $value));
    }
}