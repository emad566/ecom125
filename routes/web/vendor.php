<?php

use App\Http\Controllers\Web\Dashboard\VendorWebController;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', [VendorWebController::class, 'dashboard'])->name('dashboard');
