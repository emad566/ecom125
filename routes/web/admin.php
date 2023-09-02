<?php
namespace App\Http\Controllers\Web\Dashboard;
use App\Livewire\Admin\Home\HomeComponent;
use App\Livewire\Admin\Profile\ProfileComponent;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', HomeComponent::class)->name('dashboard');
Route::get('profile/edit', ProfileComponent::class)->name('profile.edit');
Route::put('profile/edit', [ProfileWebController::class, 'update'])->name('profile.update');
Route::put('profile/password/update', [ProfileWebController::class, 'update_password'])->name('profile.password.update');

