<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($group)
    {
        $students = Student::find($group);

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group)
    {
        return view('students.create', ['group' => $group]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $group)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
        ]);

        Student::create($request->all());

        return redirect('/groups/' . $group);
    }

    /**
     * Display the specified resource.
     */
    public function show($groups, Student $student)
    {
        return view('students.show', ['group' => $student->group, 'student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
