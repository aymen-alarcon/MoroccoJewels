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
        $users = User::all();
        return view("Admin.Users", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Role $role)
    {
        $roles = Role::all();
        return view("Admin.AddUser", compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $User)
    {
        $validate = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role_id" => "required",
        ]);

        $User->create($validate);

        return redirect()->route("Admin.Users.Index");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, Role $role)
    {
        $roles = Role::all();
        return view("Admin.EditUser", compact("user", "roles"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        $validate = $request->validate([
            "name" => "required",
            "email" => "required",
            "role_id" => "required",
        ]);

        $User->update($validate);

        return redirect()->route("Admin.Users.Index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route("Admin.Users.Index");
    }
}
