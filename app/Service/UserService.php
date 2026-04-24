<?php

namespace App\Service;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserService {
    public function checkProfileCredentials(Request $request){
        $validate = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "street" => "required",
            "city" => "required",
            "country" => "required",
            "zip" => "required",
            "phone" => "required",
            "password" => "sometimes|required",
            "newPassword" => "sometimes|required|confirmed"
        ]);

        if (Hash::check($validate["password"], Auth::user()->password)) {
            $validate["password"] = $validate["newPassword"];
        }else{
            return back()->with("failed", "The Password you entered is incorrect");
        }

        if($request->hasFile("profile_picture")){
            $path = $request->file("profile_picture")->store("users", "public");
            $validate["profile_picture"] = $path;
        }     
        
        return $validate;
    }
}