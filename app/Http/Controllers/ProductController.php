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
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Product::query();

        $category = $request->query('category');

        if ($category !== 'all') {
            $products = $query->where('category_id', $category)->latest()->paginate(8)->withQueryString();
        }

        $products = $query->paginate(4)->withQueryString();

        return view('Admin.Products.Index', compact('products', 'categories'));
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
            "history" => "required",
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
        $message = "created a new Product.";

        return redirect()->route("Logs.store", $message);
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
            "history" => "required",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required|exists:categories.id"
        ]);

        $Product->update($validate);

        $message = "Updated the Product.";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        $message = "deleted the Product.";

        return redirect()->route("Logs.store", $message);
    }
}