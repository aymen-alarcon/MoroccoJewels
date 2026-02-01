<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("Admin.Categories", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("Admin.AddCategory", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Category $category)
    {
        $validate = $request->validate([
            "name" => "required",
            "description" => "required"
        ]);
        $category->create($validate);

        return redirect()->route("Admin.Categories.Index");
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        $categories = Category::all();
        return view("Admin.dashboard");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $validate = $request->validate([
            "name" => "required",
            "description" => "required"
        ]);

        $category->update($validate);

        return redirect()->route("Admin.dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();

        return redirect()->route("Admin.Categories.Index");
    }
}
