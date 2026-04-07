<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferred_class extends Model
{
    use HasFactory;

    protected $table = 'preferred_classes'; 
    protected $fillable = ['preferred_class_name'];   
}