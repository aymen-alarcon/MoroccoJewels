<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::latest()->paginate(4);
        return view("Admin.Permissions.index", compact("permissions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Permissions.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Permission $Permission)
    {
        $validate = $request->validate([
            "name" => "string|required",
            "description" => "string|required",
        ]);

        $Permission->create($validate);

        return redirect()->route("Admin.Permissions.Index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission, Role $role)
    {
        $roles = Role::all();
        return view("Admin.Permissions.edit", compact("permission", "roles"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        $validate = $request->validate([
            "name" => "string|required",
            "description" => "string|required",
        ]);

        $permission->update($validate);

        return redirect()->route("Admin.Permissions.Index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $Permission)
    {
        $Permission->delete();

        return redirect()->route("Admin.Permissions.Index");
    }
}
