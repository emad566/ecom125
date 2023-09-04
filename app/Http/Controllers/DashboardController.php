<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function index()
    {
        if(Auth::user()->role == 'Admin'){
            return redirect()->route('admin.dashboard');
        }else if(Auth::user()->role == 'Vendor') {
            return redirect()->route('vendor.dashboard');
        }else{
            return view('dashboard');
        }
    }
}
