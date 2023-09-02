<?php
namespace App\Http\Controllers\Api\Dashboard;
use Illuminate\Support\Facades\Route;


Route::get('profile/edit', [ProfileApiController::class, 'edit']);
Route::put('profile/edit', [ProfileApiController::class, 'update']);
Route::put('profile/password/update', [ProfileAPiController::class, 'update_password']);

