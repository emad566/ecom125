<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ApiResponse;
use App\Http\Controllers\Traits\Dashboard\ProfileTrait;
use App\Http\Requests\Api\ProfileUpdateApiRequest;
use App\Http\Requests\Api\UpdatePasswordApiRequest;
use App\Http\Requests\Web\UpdatePasswordRequest;
use Illuminate\Support\Facades\Redirect;

// hashcode = 1010
class ProfileAPiController extends Controller
{
    use ProfileTrait, ApiResponse;

    function edit() {
        try {
            return $this->sendResponse(true, $this->edit_t(), 'User Profile Data',hashcode: '1010');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1010');
        }
    }

    function update(ProfileUpdateApiRequest $request) {
        try {
            return $this->sendResponse(true, $this->update_t($request), 'User Profile updated',hashcode: '1011');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1011');
        }
    }

    function update_password(UpdatePasswordApiRequest $request) {
        try {
            return $this->sendResponse(true, $this->update_password_t($request), 'User password updated',hashcode: '1012');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1012');
        }
    }
}
