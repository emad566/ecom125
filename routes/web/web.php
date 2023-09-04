<?php

namespace  App\Http\Controllers\Web\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use App\Livewire\User\Auth\LoginComponent;
use App\Livewire\Admin\Auth\LoginComponent as AdminLoginComponent;
use App\Livewire\User\Home\HomeComponent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeComponent::class)->name('home');

Route::get('login', LoginComponent::class)->name('login');

Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/../auth.php';


Route::get('/admin/login', AdminLoginComponent::class)->name('admin.login');
