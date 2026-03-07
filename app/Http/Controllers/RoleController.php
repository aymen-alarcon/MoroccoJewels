<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest()->paginate(5);
        return view("Admin.Roles.Index", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Roles.Add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Role $Role)
    {
        $validate = $request->validate([
            "role_name" => "required",
        ]);

        $Role->create($validate);

        $Role->permissions()->sync($request->input('permissions', []));

        $message = "created a new Role.";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view("Admin.Roles.Edit", compact("role", "permissions"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $validate = $request->validate([
            "role_name" => "required",
        ]);

        $role->update($validate);

        $role->permissions()->sync($request->input('permissions', []));

        $message = "updated the Role.";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $Role)
    {
        $Role->delete();
        
        $message = "deleted the Product.";

        return redirect()->route("Logs.store", $message);
    }
}
