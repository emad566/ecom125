<?php
namespace App\Http\Controllers\Traits\Dashboard;

use App\Http\Resources\UserResource;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

trait ProfileTrait{
    function edit_t()
    {
        return ['user'=>new UserResource(Auth::user())];
    }

    function update_t($request)
    {
        $user = $request->user();
        $path = $user->image;
        if($request->hasFile('image')){
            if(File::exists(public_path($user->image))){
                File::delete(public_path($user->image));
            }

            $image = $request->image;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $now = Carbon::now();
            $path = "uploads/{$now->year}/{$now->month}/{$now->day}/{$request->user()->id}";
            $image->move(public_path($path), $imageName);
            $path .= '/'.$imageName;

        }
        $inputs  = $request->all();
        $inputs['image'] = $path;

        $request->user()->fill($inputs);
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        return ['user'=>new UserResource($request->user())];
    }

    function update_password_t($request)
    {
        Auth::user()->update(['password'=>$request->password]);
        return ['user'=>new UserResource(Auth::user())];
    }
}
