<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->paginate(4);
        return view("Admin.Users.Index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Role $role)
    {
        $roles = Role::all();
        return view("Admin.Users.Add", compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $User)
    {
        $validate = $request->validate([
            "first_name" => "string|required",
            "last_name" => "string|required",
            "email" => "string|required",
            "password" => "string|required",
            "role_id" => "required|exists:roles,id",
            "street" => "string|required",
            "city" => "string|required",
            "country" => "string|required",
            "zip" => "integer|required",
            "phone" => "required",
        ]);

        if ($request->hasFile("profile_picture")) {
            $path = $request->file("profile_picture")->store("users", "public");
            $validate['profile_picture'] = $path;
        }

        $User->create($validate);

        $message = "created a new User.";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $userInfo, Role $role)
    {
        $roles = Role::all();
        return view("Admin.Users.Edit", compact("userInfo", "roles"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $userInfo)
    {
        $validate = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "role_id" => "required|exists:roles,id",
            "street" => "required",
            "city" => "required",
            "country" => "required",
            "zip" => "required",
            "phone" => "required",
        ]);

        $userInfo->update($validate);

        $message = "updated the Product.";

        return redirect()->route("Logs.store", $message);
    }

    public function updateProfile(Request $request, User $User)
    {
        $validate = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "street" => "required",
            "city" => "required",
            "country" => "required",
            "zip" => "required",
            "phone" => "required",
        ]);

        if($request->hasFile("profile_picture")){
            $path = $request->file("profile_picture")->store("users", "public");
            $validate["profile_picture"] = $path;
        }

        $User->update($validate);

        return redirect()->route("Profile.index")->with("success", "You have successfully update a new User.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        $User->delete();

        $message = "deleted the Product.";

        return redirect()->route("Logs.store", $message);
    }
}
