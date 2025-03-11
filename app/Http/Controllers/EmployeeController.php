<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('employees.empdash', compact('employees'));
    }


    public function create()
    {
        return view('employees.addemployees');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required |numeric |digits:10',
            'city' => 'required',
            'skills' => 'required | nullable |array',
            'gender' => 'required | in:male,female,others',
            'photo' => 'required |file|mimes:jpg,png,pdf|max:2048'
        ]);
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,

            'gender' => $request->gender,
            'city' => $request->city,
            'skills' => json_encode($request->skills), // Assuming skills is an array of checkbox values
            'phone' => $request->phone,
            //photo upload
            'photo' => $request->file('photo')->store('uploads', 'public')

        ]);

        return redirect()->route('employee.index')->with('success', 'Employee created successfully');
    }


    public function show(string $id)
    {
        $employees = Employee::find($id);
        return view('employees.showemployee', compact('employees'));
    }


    public function edit(string $id)
    {
        $employees = Employee::find($id);
        return view('employees.editemp', compact('employees'));
    }


    public function update(Request $request, string $id)
    {
        Employee::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,

            'gender' => $request->gender,
            'city' => $request->city,
            'skills' => json_encode($request->skills), // Assuming skills is an array of checkbox values
            'phone' => $request->phone,
            'photo' => $request->file('photo')->store('uploads', 'public')
        ]);
        return redirect('employee.index');
    }


    public function destroy(string $id)
    {

        $employees = Employee::find($id);

        if ($employees->photo && file_exists(public_path('storage/uploads/' . $employees->photo))) {

            unlink(public_path('storage/' . $employees->photo));

        }

        $employees->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully');

    }


}
