<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        // Updated to use 'index' instead of 'students.index' to match your file structure
        return view('index', compact('students')); 
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('students.index');
    }
}