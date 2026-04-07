<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Preferred_class;

class PreferredClassController extends Controller
{
    // ===============================
    // Preferred Classes List
    // ===============================
    public function index()
    {
        $preferredClasses = Preferred_class::all(); // সব ডেটা নিয়ে আসা
        return view('backend.preferred_class.index', compact('preferredClasses'));
    }

    // ===============================
    // Show Create Form
    // ===============================
    public function create()
    {
        return view('backend.preferred_class.create');
    }

    // ===============================
    // Store New Preferred Class
    // ===============================
    public function store(Request $request)
    {
        $request->validate([
            'preferred_class_name' => 'required|string|max:255|unique:preferred_classes,preferred_class_name',
        ]);

        Preferred_class::create([
            'preferred_class_name' => $request->preferred_class_name,
        ]);

        return redirect()->route('preferred_class.index')->with('success', 'Preferred class added successfully.');
    }

    // ===============================
    // Show Edit Form
    // ===============================
    public function edit($id)
    {
        $preferredClass = Preferred_class::findOrFail($id);
        return view('backend.preferred_class.edit', compact('preferredClass'));
    }

    // ===============================
    // Update Preferred Class
    // ===============================
   public function update(Request $request,$id)
    {

    $request->validate([
    'preferred_class_name'=>'required|max:255|unique:preferred_classes,preferred_class_name,'.$id
    ]);

    $class=Preferred_class::findOrFail($id);

    $class->update([
    'preferred_class_name'=>$request->preferred_class_name
    ]);

    return redirect()->route('preferred_class.index')
    ->with('success','Preferred class updated successfully');

}

    // ===============================
    // Delete Preferred Class
    // ===============================
    public function delete($id)
    {
        $preferredClass = Preferred_class::findOrFail($id);
        $preferredClass->delete();

        return redirect()->route('preferred_class.index')->with('success', 'Preferred class deleted successfully.');
    }
}