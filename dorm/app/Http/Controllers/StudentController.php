<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_number' => 'required|unique:students',
            'course' => 'required',
            'year_level' => 'required'
        ]);

        Student::create($request->all());
        return redirect('/students')->with('success', 'Student added successfully!');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        
        $request->validate([
            'student_number' => 'required|unique:students,student_number,' . $id . ',student_id',
            'course' => 'required',
            'year_level' => 'required'
        ]);

        $student->update($request->all());
        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/students')->with('success', 'Student deleted successfully!');
    }
}
