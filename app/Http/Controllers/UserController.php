<?php

namespace App\Http\Controllers;

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
    public function create()
    {
        return view("Admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $User)
    {
        $validate = $request->validate([
            "User_name" => "required",
            "permission" => "required",
        ]);

        $User->create($validate);

        return redirect()->route("Admin.User");
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
    public function edit(User $User)
    {
        $User = User::all();
        return view("Admin.edit", compact("User"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {
        $validate = $request->validate([
            "User_name" => "required",
            "permission" => "required",
        ]);

        $User->update($validate);

        return redirect()->route("Admin.User");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        $User->delete();

        return view("Admin.User");
    }
}
