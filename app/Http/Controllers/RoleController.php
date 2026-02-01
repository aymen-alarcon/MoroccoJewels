<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view("Admin.Roles", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.AddRole");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Role $Role)
    {
        $validate = $request->validate([
            "role_name" => "required",
            "permission" => "required",
        ]);

        $Role->create($validate);

        return redirect()->route("Admin.Roles.Index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $Role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $Role)
    {
        $Role = Role::all();
        return view("Admin.edit", compact("Role"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $Role)
    {
        $validate = $request->validate([
            "role_name" => "required",
            "permission" => "required",
        ]);

        $Role->update($validate);

        return redirect()->route("Admin.Role");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $Role)
    {
        $Role->delete();
        
        return redirect()->route("Admin.Roles.Index");
    }
}
