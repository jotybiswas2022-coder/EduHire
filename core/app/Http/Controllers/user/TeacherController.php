<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Preferred_class;
use App\Models\Preferred_subject;

class TeacherController extends Controller
{
    // Teacher List for a Class
    public function teacherList($class_id = null)
    {
        if (!$class_id) {
            return redirect('/')->with('error', 'Class not selected');
        }

        $class = Preferred_class::find($class_id);

        if (!$class) {
            return redirect('/')->with('error', 'Class not found');
        }

        // Get all approved teachers
        $allTeachers = Profile::where('status', 'approved')->get();

        // Filter teachers by selected class
        $teachers = $allTeachers->filter(function ($teacher) use ($class_id) {
            $class_ids = $teacher->preferred_class;

            if (is_null($class_ids)) return false;

            if (is_string($class_ids)) {
                $decoded = json_decode($class_ids, true);
                $class_ids = is_array($decoded) ? $decoded : explode(',', $class_ids);
            }

            return in_array((int)$class_id, array_map('intval', $class_ids));
        });

        // Attach class + subject names
        foreach ($teachers as $teacher) {
            $class_ids = $teacher->preferred_class;
            $subject_ids = $teacher->preferred_subject;

            if (is_string($class_ids)) {
                $decoded = json_decode($class_ids, true);
                $class_ids = is_array($decoded) ? $decoded : explode(',', $class_ids);
            }

            if (is_string($subject_ids)) {
                $decoded = json_decode($subject_ids, true);
                $subject_ids = is_array($decoded) ? $decoded : explode(',', $subject_ids);
            }

            $class_ids = is_array($class_ids) ? array_map('intval', $class_ids) : [];
            $subject_ids = is_array($subject_ids) ? array_map('intval', $subject_ids) : [];

            $teacher->preferred_class_names = $class_ids
                ? Preferred_class::whereIn('id', $class_ids)->pluck('preferred_class_name')->toArray()
                : [];

            $teacher->preferred_subject_names = $subject_ids
                ? Preferred_subject::whereIn('id', $subject_ids)->pluck('preferred_subject_name')->toArray()
                : [];
        }

        // Sort by experience descending
        $approvedTeachers = $teachers->sortByDesc(function ($teacher) {
            return $teacher->experience ?? 0;
        })->values();

        return view('frontend.teachers', compact('class', 'approvedTeachers', 'class_id'));
    }

    // Teacher Details Page
    public function teacherDetails($class_id, $teacher_id)
    {
        $class = Preferred_class::find($class_id);

        if (!$class) {
            return redirect('/')->with('error', 'Class not found');
        }

        $teacher = Profile::find($teacher_id);

        if (!$teacher || $teacher->status !== 'approved') {
            return redirect()->back()->with('error', 'Teacher not found or not approved');
        }

        // Class names
        $class_ids = $teacher->preferred_class;
        $subject_ids = $teacher->preferred_subject;

        if (is_string($class_ids)) {
            $decoded = json_decode($class_ids, true);
            $class_ids = is_array($decoded) ? $decoded : explode(',', $class_ids);
        }

        if (is_string($subject_ids)) {
            $decoded = json_decode($subject_ids, true);
            $subject_ids = is_array($decoded) ? $decoded : explode(',', $subject_ids);
        }

        $class_ids = is_array($class_ids) ? array_map('intval', $class_ids) : [];
        $subject_ids = is_array($subject_ids) ? array_map('intval', $subject_ids) : [];

        $teacher->preferred_class_names = $class_ids
            ? Preferred_class::whereIn('id', $class_ids)->pluck('preferred_class_name')->toArray()
            : [];

        $teacher->preferred_subject_names = $subject_ids
            ? Preferred_subject::whereIn('id', $subject_ids)->pluck('preferred_subject_name')->toArray()
            : [];

        return view('frontend.teacher_details', compact('teacher', 'class'));
    }
}