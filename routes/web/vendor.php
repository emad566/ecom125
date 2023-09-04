<?php
namespace App\Livewire\Vendor;

use Illuminate\Support\Facades\Route;


Route::get('dashboard', Home\VendorComponent::class)->name('dashboard');

Route::get('profile', Profile\ProfileComponent::class)->name('profile');
