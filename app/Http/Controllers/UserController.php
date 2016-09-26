<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function getProfile(){
        return view('profile', ['user' => Auth::user()]);
    }

    public function updateAvatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $path = public_path('uploads/avatars/' . $filename);
            Image::make($avatar)->resize(300, 300)->save($path);

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile' , array('user' => Auth::user()));
    }
}
