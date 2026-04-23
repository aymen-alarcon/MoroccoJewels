<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Materiel;
use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $productsCategories = $this->productService->loadProducts($request);
        
        $products = $productsCategories["products"];
        $categories = $productsCategories["categories"];

        return view('Admin.Products.Index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
    {
        $categories = Category::all();
        $materiels = Materiel::all();
        return view("Admin.Products.Add", compact("categories", "materiels"));
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
            "category_id" => "required|exists:categories,id",
            'main_image'  => 'image|max:2048'
        ]);

        $validate["is_deleted"] = 0 ;

        if ($request->hasFile('main_image')) {
            $path = $request->file('main_image')->store('products', 'public');
            $validate['main_image'] = $path;
        }

        $newProduct = $Product->create($validate);
        
        $newProduct->materiels()->sync($request->input("materiels", []));

        $message = "created a new Product.";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $materiels = Materiel::all();
        $categories = Category::all();
        return view("Admin.Products.Edit", compact("product", "categories", "materiels"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            "name" => "required",
            "description" => "required",
            "history" => "required",
            "price" => "required",
            "stock" => "required",
            "category_id" => "required|exists:categories,id",
            'main_image'  => 'image|max:2048'
        ]);

        if ($request->hasFile('main_image')) {
            $path = $request->file('main_image')->store('products', 'public');
            $validate['main_image'] = $path;
        }

        $product->update($validate);

        $product->materiels()->sync($request->input("materiels", []));

        $message = "Updated the Product " . $product->id . ".";

        return redirect()->route("Logs.store", $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        $message = "deleted the Product " . $Product->id . ".";

        return redirect()->route("Logs.store", $message);
    }
}