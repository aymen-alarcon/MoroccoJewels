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
        return view("Admin.Products", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
    {
        $categories = Category::all();
        return view("Admin.AddProduct", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $Product)
    {
        $validate = $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required',
            'price'       => 'required|numeric|min:0',
            'description' => 'required|string',
            'stock'       => 'required|integer|min:0',
            'main_image'  => 'required|image|max:2048',
            'gallery.*'   => 'image|max:2048',
        ]);

        $Product->create($validate);

        return $this->index();
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

        return redirect()->route("Admin.Products");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        return view("Admin.Products");
    }
}
