<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ApiResponse;
use App\Http\Requests\Api\LoginApiRequest;
use App\Http\Requests\Api\RegisterApiRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// hashcode = 1000
class AuthApiController extends Controller
{
    use ApiResponse;
    function register (RegisterApiRequest $request)
    {
        try {
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ]);
            $token = $user->createToken("auth_token");
            return $this->sendResponse(true, ['user'=>new UserResource($user), 'token'=>$token->plainTextToken], hashcode: '1000');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1000');
        }
    }

    function login (LoginApiRequest $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
            $token = $user->createToken("auth_token");
            return $this->sendResponse(true, ['user'=>new UserResource($user), 'token'=>$token->plainTextToken], hashcode: '1001');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1001');
        }
    }

    function logout()
    {
        try {
            Auth::user()->tokens()->delete();
            return $this->sendResponse(true, [], message: 'Logout success', hashcode: '1002');

            $request->user()->currentAccessToken()->delete();
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1002');
        }
    }

    function logout_all()
    {
        try {
            Auth::user()->currentAccessToken()->delete();
            return $this->sendResponse(true, [], message: 'Logout all success', hashcode: '1003');
        } catch (\Throwable $th) {
            return $this->sendServerError('', [], $th,  hashcode: 'x1003');
        }
    }
}
