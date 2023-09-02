<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;

class AuthWebController extends Controller
{
    function login() {
        return view('admin.auth.login');
    }
}
