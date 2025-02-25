<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();


        // $students=student::find(2);

        // $students=student::count();
        // $students=student::count();
        // return $students;

        return view('studentdash', compact('students'));
    }

    public function create()
    {
        return view('createstudent');
    }


    public function store(Request $request)
    {
        student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('student.index');
    }

    public function show(string $id)
    {
        $students = Student::find($id);
        return view('showstudent', compact('students'));
    }

    public function edit(string $id)
    {
        $students = Student::find($id);
        return view("editstudent", compact('students'));

    }

    public function update(Request $request, string $id)
    {
        student::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('student.index');

    }

    public function destroy(string $id)
    {
        student::destroy($id);
        return redirect()->route('student.index');
    }
}
