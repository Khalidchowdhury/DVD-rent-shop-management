<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employee::all();
        return view('dashboard.employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.create');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'address'    => 'required',
            'city'       => 'required',
            'state'      => 'required',
            'zip_code'   => 'required',
            'position'   => 'required',
            'department' => 'required',
        ]);
        
        $employee = employee::create([
            'first_name' => $validatedData['first_name'],
            'last_name'  => $validatedData['last_name'],
            'email'      => $validatedData['email'],
            'phone'      => $validatedData['phone'],
            'address'    => $validatedData['address'],
            'city'       => $validatedData['city'],
            'state'      => $validatedData['state'],
            'zip_code'   => $validatedData['zip_code'],
            'position'   => $validatedData['position'],
            'department' => $validatedData['department']
        ]);

        return redirect()->route('employee.page')
                       ->with('success', 'New Employee added successfully');
    }


    public function view($id)
    {
        $employee = employee::find($id);
        return view('dashboard.employee.view', compact('employee'));
    }



    public function destroy($id)
    {
        $delete = employee::findOrFail($id);
        $delete->delete();
        return redirect()->route('employee.page')->with('success', 'Empployee Delele Succesfully');
    }






















}
