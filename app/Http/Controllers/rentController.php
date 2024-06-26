<?php

namespace App\Http\Controllers;

use Rental;
use App\Models\Rent;
use App\Models\Movie;
use App\Models\Category;
use App\Models\Custommer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class rentController extends Controller
{
    

    


    /**
     * 
     * Rental all details controller
     *
     */
    public function index()
    {
        
        $rent = Rent::all();
        return view('dashboard.Rent.index', compact('rent'));
    }


    /**
     * 
     * Rental all details controller
     *
     */
    public function create()
    {
        $movie = Movie::all();
        $customer = Custommer::all();
        $rent = Rent::all();
        return view('dashboard.Rent.create', compact('movie', 'customer', 'rent'));
    }


    /**
     * 
     * Rental all details store
     *
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name'  => 'required',
            'select_dvd'     => 'required',
            'take_date'      => 'required',
            'refund_date'    => 'required',
            'payment_method' => 'required',
            'amount'         => 'required',
            'transaction_id' => 'required',
        ]);

        
        $rent = Rent::create([
            'customer_name'  => $validatedData['customer_name'],
            'select_dvd'     => $validatedData['select_dvd'],
            'take_date'      => $validatedData['take_date'],
            'refund_date'    => $validatedData['refund_date'],
            'payment_method' => $validatedData['payment_method'],
            'amount'         => $validatedData['amount'],
            'transaction_id' => $validatedData['transaction_id'],
        ]);

        return redirect()->route('rent.page')
                       ->with('success', 'New DVD Rent added successfull');
    }


    /**
     * 
     * Rental all details Delete
     *
     */
    public function view($id)
    {
        $rent = Rent::find($id);
        return view('dashboard.Rent.view', compact('rent'));
    }

    /**
     * 
     * Rental all details Delete
     *
     */

    public function destroy($id)
    {
        $delete = Rent::findOrFail($id);
        $delete->delete();
        return redirect()->route('rent.page')->with('success', 'Rent Delele Succesfully');
    }



    /**
     * 
     * Rent  search 
     * 
     */
    public function searchRent(Request $request)
    {
        $search = $request->input('search');
        $cetagorys=Category::all();
        $searchRent = Rent::where('customer_name', 'like', "%$search%")->get();
        return view('dashboard.Rent.search', compact('searchRent','cetagorys'));
    }



















}
