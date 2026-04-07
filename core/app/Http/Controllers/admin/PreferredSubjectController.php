<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Preferred_subject;

class PreferredSubjectController extends Controller
{
    // ===============================
    // Preferred Subjects List
    // ===============================
    public function index()
    {
        $preferredSubjects = Preferred_subject::all();
        return view('backend.preferred_subject.index', compact('preferredSubjects'));
    }

    // ===============================
    // Show Create Form
    // ===============================
    public function create()
    {
        return view('backend.preferred_subject.create');
    }

    // ===============================
    // Store New Preferred Subject
    // ===============================
    public function store(Request $request)
    {
        $request->validate([
            'preferred_subject_name' => 'required|string|max:255|unique:preferred_subjects,preferred_subject_name',
        ]);

        Preferred_subject::create([
            'preferred_subject_name' => $request->preferred_subject_name,
        ]);

        return redirect()->route('preferred_subject.index')->with('success', 'Preferred subject added successfully.');
    }

    // ===============================
    // Update Preferred Subject
    // ===============================
    public function update(Request $request, $id)
    {
        $preferredSubject = Preferred_subject::findOrFail($id);

        $request->validate([
            'preferred_subject_name' => 'required|string|max:255|unique:preferred_subjects,preferred_subject_name,'.$id,
        ]);

        $preferredSubject->update([
            'preferred_subject_name' => $request->preferred_subject_name,
        ]);

        return redirect()->route('preferred_subject.index')->with('success', 'Preferred subject updated successfully.');
    }

    // ===============================
    // Delete Preferred Subject
    // ===============================
    public function delete($id)
    {
        $preferredSubject = Preferred_subject::findOrFail($id);
        $preferredSubject->delete();

        return redirect()->route('preferred_subject.index')->with('success', 'Preferred subject deleted successfully.');
    }
}