<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);

        $cart = session()->get("cart", []);

        if(isset($cart[$productId])){
            $cart[$productId]["quantity"]++;
        }else{
            $cart[$productId] = [
                "id" => $product->id,
                "name" => $product->name,
                "price" => $product->price,
                "category" => $product->category->name,
                "quantity" => 1
            ];
        }

        session()->put("cart", $cart);

        return redirect()->route("Client.Cart")->with('success', 'Produit ajoutez aux panier !');
    }

    public function removeFromCart($productId){
        $product = Product::findOrFail($productId);

        $cart = session()->get("cart", []);

        if(isset($cart[$productId])){
            unset($cart[$productId]);
            session()->put("cart", $cart);
        }

        return redirect()->back()->with('success', 'Produit supprimé du panier !');
    }
}