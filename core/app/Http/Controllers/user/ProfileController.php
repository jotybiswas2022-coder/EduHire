<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Preferred_class;
use App\Models\Preferred_subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ===============================
    // Profile View
    // ===============================
    public function index()
    {
        $profile = Profile::firstOrCreate(
            ['user_id' => Auth::id()],
            [
                'name' => Auth::user()->name,
                'status' => 'pending'
            ]
        );

        // JSON → array
        $preferred_classes = json_decode($profile->preferred_class ?? '[]', true);
        $preferred_subjects = json_decode($profile->preferred_subject ?? '[]', true);

        // Get Class Names
        $preferred_class_names = Preferred_class::whereIn('id', $preferred_classes ?? [])
            ->pluck('preferred_class_name')
            ->toArray();

        // Get Subject Names
        $preferred_subject_names = Preferred_subject::whereIn('id', $preferred_subjects ?? [])
            ->pluck('preferred_subject_name')
            ->toArray();

        return view('frontend.profile.index', compact(
            'profile',
            'preferred_class_names',
            'preferred_subject_names'
        ));
    }

    // ===============================
    // Profile Edit
    // ===============================
    public function edit()
    {
        $profile = Profile::firstOrCreate(
            ['user_id' => Auth::id()],
            [
                'name' => Auth::user()->name
            ]
        );

        // Dropdown Data
        $preferred_classes = Preferred_class::all();
        $preferred_subjects = Preferred_subject::all();

        // Ensure Array (Fix json_decode error)
        if (!is_array($profile->preferred_class)) {
            $profile->preferred_class = json_decode($profile->preferred_class ?? '[]', true);
        }

        if (!is_array($profile->preferred_subject)) {
            $profile->preferred_subject = json_decode($profile->preferred_subject ?? '[]', true);
        }

        return view('frontend.profile.edit', compact(
            'profile',
            'preferred_classes',
            'preferred_subjects'
        ));
    }

    // ===============================
    // Update Profile
    // ===============================
    public function update(Request $request)
    {
        $request->validate([

            // Personal
            'name' => 'required|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'mother_name' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'gender' => 'nullable|in:Male,Female',

            // Contact
            'number' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'division' => 'nullable|string|max:50',
            'district' => 'nullable|string|max:100',
            'current_address' => 'nullable|string',
            'permanent_address' => 'nullable|string',

            // Education
            'ssc_board' => 'nullable|string|max:100',
            'ssc_result' => 'nullable|string|max:20',
            'ssc_year' => 'nullable|string|max:10',
            'hsc_result' => 'nullable|string|max:20',
            'bachelor_degree' => 'nullable|string|max:255',
            'master_degree' => 'nullable|string|max:255',
            'subject_major' => 'nullable|string|max:255',

            // Teaching
            'preferred_subject' => 'nullable|array',
            'preferred_subject.*' => 'integer|exists:preferred_subjects,id',
            'preferred_class' => 'nullable|array',
            'preferred_class.*' => 'integer|exists:preferred_classes,id',
            'experience' => 'nullable|integer|min:0',
            'previous_school' => 'nullable|string|max:255',
            'salary' => 'nullable|numeric|min:0',

            // Image
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profile = Profile::firstOrCreate(
            ['user_id' => Auth::id()],
            ['name' => Auth::user()->name]
        );

        // ===============================
        // Image Upload
        // ===============================
        if ($request->hasFile('image')) {

            if ($profile->image && Storage::disk('public')->exists($profile->image)) {
                Storage::disk('public')->delete($profile->image);
            }

            $profile->image = $request->file('image')->store('teacher', 'public');
        }

        // ===============================
        // Prepare Data
        // ===============================
        $data = $request->except('image');

        // Save as JSON
        $data['preferred_subject'] = json_encode($request->preferred_subject ?? []);
        $data['preferred_class'] = json_encode($request->preferred_class ?? []);

        // Update
        $profile->update($data);

        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }

    function teacherdetails($class_id, $teacher_id)
    {
        $teacher = Profile::findOrFail($teacher_id);

        // JSON → array
        $preferred_classes = json_decode($teacher->preferred_class ?? '[]', true);
        $preferred_subjects = json_decode($teacher->preferred_subject ?? '[]', true);

        // Get Class Names
        $preferred_class_names = Preferred_class::whereIn('id', $preferred_classes ?? [])
            ->pluck('preferred_class_name')
            ->toArray();

        // Get Subject Names
        $preferred_subject_names = Preferred_subject::whereIn('id', $preferred_subjects ?? [])
            ->pluck('preferred_subject_name')
            ->toArray();

        return view('frontend.teacher_details', compact(
            'teacher',
            'preferred_class_names',
            'preferred_subject_names'
        ));
    }
}