<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function index($local)
    {
        App::setLocale($local);
        session()->put('locale', $local);
        return back();
    }
}
