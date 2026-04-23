<?php

namespace App\Service;

use App\Models\Product;
use App\Models\Category;
use App\Models\Materiel;
use Illuminate\Http\Request;

class ProductService
{
    public function loadProducts(Request $request){
        $categories = Category::all();
        $query = Product::query();

        $category = $request->query('category');

        if ($category !== 'all') {
            $products = $query->where('category_id', $category)->latest()->paginate(8)->withQueryString();
        }

        $products = $query->paginate(4)->withQueryString();
        
        $productsCategories = ["categories" => $categories, "products" => $products];
        
        return $productsCategories;
    }
}