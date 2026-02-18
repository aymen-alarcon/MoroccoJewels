<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validate = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "password" => "required"
        ]);

        $validate["password"] = Hash::make($validate["password"]);
        $validate["role_id"] = 1;

        $user = User::create($validate);

        Auth::login($user);

        return redirect()->route("Home")->with("success", "Congratulation! you have successfully created an account.");
    }
}
