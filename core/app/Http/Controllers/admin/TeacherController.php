<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Preferred_class;
use App\Models\Preferred_subject;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
	// ===============================
	// Show all teachers
	// ===============================
	public function index()
	{
		$teachers = Profile::all();
		$preferred_classes = Preferred_class::all();
		$preferred_subjects = Preferred_subject::all();

		// Attach class & subject names, skip if empty
		foreach ($teachers as $key => $teacher) {
			$class_ids = json_decode($teacher->preferred_class ?? '[]', true);
			$subject_ids = json_decode($teacher->preferred_subject ?? '[]', true);

			if (empty($class_ids) || empty($subject_ids)) {
				unset($teachers[$key]); // Skip teachers without classes/subjects
				continue;
			}

			$teacher->selectedClassNames = $preferred_classes
				->whereIn('id', $class_ids)
				->pluck('name')
				->toArray();

			$teacher->selectedSubjectNames = $preferred_subjects
				->whereIn('id', $subject_ids)
				->pluck('name')
				->toArray();
		}

		return view('backend.teacher_list.index', compact('teachers', 'preferred_classes', 'preferred_subjects'));
	}

	// ===============================
	// Show create teacher form
	// ===============================
	public function create()
	{
		$preferred_classes = Preferred_class::all();
		$preferred_subjects = Preferred_subject::all();
		return view('backend.teacher_list.create', compact('preferred_classes', 'preferred_subjects'));
	}

	// ===============================
	// Store new teacher
	// ===============================
	public function store(Request $request)
	{
		$data = $request->all();

		// File upload
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$path = $image->store('teachers', 'public');
			$data['image'] = $path;
		}

		// Multiple select json encode
		$data['preferred_class'] = json_encode($request->preferred_class ?? []);
		$data['preferred_subject'] = json_encode($request->preferred_subject ?? []);

		Profile::create($data);

		return redirect()->route('teacher.index')->with('success', 'Teacher profile created successfully!');
	}

	// ===============================
	// Update teacher from modal
	// ===============================
	public function update(Request $request, $id)
	{
		$teacher = Profile::findOrFail($id);
		$data = $request->all();

		// File upload
		if ($request->hasFile('image')) {
			if ($teacher->image) {
				Storage::disk('public')->delete($teacher->image);
			}
			$image = $request->file('image');
			$path = $image->store('teachers', 'public');
			$data['image'] = $path;
		}

		// Multiple select json encode
		$data['preferred_class'] = json_encode($request->preferred_class ?? []);
		$data['preferred_subject'] = json_encode($request->preferred_subject ?? []);

		$teacher->update($data);

		return redirect()->route('teacher.index')->with('success', 'Teacher profile updated successfully!');
	}

	// ===============================
	// Delete teacher
	// ===============================
	public function delete($id)
	{
		$teacher = Profile::findOrFail($id);

		if ($teacher->image) {
			Storage::disk('public')->delete($teacher->image);
		}

		$teacher->delete();

		return redirect()->route('teacher.index')->with('success', 'Teacher profile deleted successfully!');
	}

	// ===============================
	// Approve teacher
	// ===============================
	public function approve($id)
	{
		$teacher = Profile::findOrFail($id);
		$teacher->status = 'approved';
		$teacher->save();

		return redirect()->back()->with('success', "$teacher->name has been approved!");
	}

	// ===============================
	// Reject teacher
	// ===============================
	public function reject($id)
	{
		$teacher = Profile::findOrFail($id);
		$teacher->status = 'rejected';
		$teacher->save();

		return redirect()->back()->with('success', "$teacher->name has been rejected!");
	}
}