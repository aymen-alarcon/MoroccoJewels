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
        $categories = Category::latest()->paginate(8);
        return view("Admin.Categories.Index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("Admin.Categories.Add", compact("categories"));
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

        $message = "created a new category";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view("Admin.Categories.Edit", compact("category"));
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

        $message = "updated the category";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();

        $message = "deleted the category";

        return redirect()->route("Logs.store", $message);
    }
}
