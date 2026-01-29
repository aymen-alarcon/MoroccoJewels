<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Product = Product::all();
        return view("Admin.Product", compact("Product"));
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
    public function store(Request $request, Product $Product)
    {
        $validate = $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "stock" => "required",
            "is_deleted" => "required"
        ]);

        $Product->create($validate);

        return redirect()->route("Admin.Product");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        $Product = Product::all();
        return view("Admin.edit", compact("Product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $Product)
    {
        $validate = $request->validate([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "stock" => "required",
            "is_deleted" => "required"
        ]);

        $Product->update($validate);

        return redirect()->route("Admin.Product");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        return view("Admin.Product");
    }
}
