<?php

namespace App\Http\Controllers\Api\Dashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware'=>['TenantFree', 'guest']], function (){

});

Route::group(['middleware'=>['TenantActive', 'guest']], function (){
    Route::post('register', [AuthApiController::class, 'register']);
    Route::post('login', [AuthApiController::class, 'login']);
});

Route::group(['middleware'=>['TenantActive', 'auth:sanctum']], function (){
    /* =========================== logout =========================== */
    Route::delete('logout', [AuthApiController::class, 'logout']);
    Route::delete('logout/all', [AuthApiController::class, 'logout_all']);
    /* =========================== /logout =========================== */


    /* =========================== profile =========================== */
    Route::get('profile/edit', [ProfileApiController::class, 'edit'])->name('profile');
    Route::put('profile/update', [ProfileApiController::class, 'update'])->name('profile.update');
    /* =========================== /profile =========================== */


});











