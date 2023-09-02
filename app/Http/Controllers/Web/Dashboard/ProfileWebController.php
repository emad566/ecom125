<?php

namespace App\Http\Controllers\Web\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ApiResponse;
use App\Http\Controllers\Traits\Dashboard\ProfileTrait;
use App\Http\Requests\Web\ProfileUpdateRequest;
use App\Http\Requests\Web\UpdatePasswordRequest;
use Illuminate\Support\Facades\Redirect;

// hashcode = 1020

class ProfileWebController extends Controller
{
    use ProfileTrait, ApiResponse;

    function edit() {
        return view('admin.profile.edit', $this->edit_t());
    }

    function update(ProfileUpdateRequest $request) {
        try {
            $this->update_t($request);
            toastr()->success('Profile Updated Successfully!');
            return Redirect::route('admin.profile.edit')->with('status', 'profile-updated');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x01021');
        }
    }

    function update_password(UpdatePasswordRequest $request) {
        try {
            $this->update_password_t($request);
            toastr()->success('Password Updated Successfully!');
            return Redirect::route('admin.profile.edit');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x01022');
        }
    }
}
