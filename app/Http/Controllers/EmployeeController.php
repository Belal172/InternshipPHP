<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.empdash', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.addemployees');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required |numeric |digits:10',
            'city' => 'required',
            'skills' => 'required | nullable |array',
            'gender' => 'required | in:male,female,others',
            'photo'=>'required |file|mimes:jpg,png,pdf|max:2048'
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

        return redirect()->route('employee.index')->with('success','Employee created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employees = Employee::find($id);
        return view('employees.showemployee', compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::find($id);
        return view('employees.editemp', compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Employee::where('id',$id)->update([
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect()->route('employee.index');
    }
}
