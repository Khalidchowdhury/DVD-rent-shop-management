<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use App\Models\Custommer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    /**
     * 
     * All custommer view controller
     *
     */
    public function index()
    {
        $custommer = Custommer::all();
        return view('dashboard.customer.index', compact('custommer'));
    }

    /**
     * 
     * New custommer create function
     *
     */
    public function create()
    {
        return view('dashboard.customer.create');
    }

   
    
    /**
     * 
     * Custommer data store controller
     *
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'city'        => 'required',
            'state'       => 'required',
            'postal_code' => 'required',
        ]);
        
        $custommer = Custommer::create([
            'first_name'    => $validatedData['first_name'],
            'last_name'     => $validatedData['last_name'],
            'email'         => $validatedData['email'],
            'phone'         => $validatedData['phone'],
            'city'          => $validatedData['city'],
            'state'         => $validatedData['state'],
            'postal_code'   => $validatedData['postal_code'],
        ]);

        return redirect()->route('customer.page')
                       ->with('success', 'New Customer added successfully');
    }


    /**
     * 
     * Custommer data view controller
     *
     */
    public function view($id)
    {
        $custommer = Custommer::find($id);
        return view('dashboard.customer.view', compact('custommer'));
    }


    /**
     * 
     * Custommer data delete controller
     *
     */
    public function destroy($id)
    {
        $delete = Custommer::findOrFail($id);
        $delete->delete();
        return redirect()->route('customer.page')->with('success', 'Customer Delele Succesfully');
    }




    /**
     * 
     * customer site dynamic search 
     * 
     */
    public function searchCustomer(Request $request)
    {
        $search = $request->input('search');
        $cetagorys=Category::all();
        $searchCustomer = Custommer::where('first_name', 'like', "%$search%")->get();
        return view('dashboard.customer.search', compact('searchCustomer','cetagorys'));
    }












}
