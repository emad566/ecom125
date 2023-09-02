<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;

class VendorWebController extends Controller
{
    function dashboard() {
        return view('vendor.dashboard');
    }
}
