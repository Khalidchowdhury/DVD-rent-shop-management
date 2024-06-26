<?php

namespace App\Http\Controllers\Backend;

use App\Models\employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Custommer;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class dashController extends Controller
{

    // Show Dashboard Panel
    public function showDashboard(){
        $employeeCount = employee::count();
        $CustomerCount = Custommer::count();
        $movieCount = Movie::count();
        return view('dashboard.index', compact('employeeCount','CustomerCount','movieCount'));
    }
    

    // Admin Login System 
    public function login(){
        return view('auth.login');
    }


    // Admin Logout System
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }






















}
