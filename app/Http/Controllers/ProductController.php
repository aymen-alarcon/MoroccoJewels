<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("Admin.Products.Index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
    {
        $categories = Category::all();
        return view("Admin.Products.Add", compact("categories"));
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
            "category_id" => "required|exists:categories,id"
        ]);

        $validate["is_deleted"] = 0 ;

        if ($request->hasFile('main_image')) {
            $path = $request->file('main_image')->store('products', 'public');
            $validate['main_image'] = $path;
        }

        $Product->create($validate);

        return redirect()->route("Admin.Products.Index")->with("success", "You have successfully created a new Product.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $Product)
    {
        $Product = Product::all();
        return view("Admin.Products.Edit", compact("Product"));
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
            "category_id" => "required|exists:categories.id"
        ]);

        $Product->update($validate);

        return redirect()->route("Admin.Products.Index")->with("success", "You have successfully edited a new Product.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        return redirect()->route("Admin.Products.Index");
    }
}