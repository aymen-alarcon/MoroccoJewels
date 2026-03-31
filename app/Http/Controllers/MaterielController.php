<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiels = Materiel::latest()->paginate(5);
        return view("Admin.Materiels.Index", compact("materiels"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.Materiels.Add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required|min:10"
        ]);

        Materiel::create($validated);

        $message = "created a new materiel";

        return redirect()->route("Logs.store", compact("message"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materiel $materiel)
    {
        return view("Admin.Materiels.Edit", compact("materiel"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materiel $materiel)
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required"
        ]);

        $materiel->update($validated);

        return redirect()->route("Admin.Materiels.Index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materiel $materiel)
    {
        $materiel->delete();

        return redirect()->route("Admin.Materiels.Index");
    }
}
