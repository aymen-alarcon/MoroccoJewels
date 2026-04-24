<?php

namespace App\Http\Controllers;

use App\Service\CartService;
use App\Models\Product;

class CartController extends Controller
{
    protected CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    
    public function addToCart($productId)
    {
        $this->cartService->add($productId);

        return redirect()->route('Client.Cart')->with('success', 'Produit ajoutez aux panier !');
    }
    
    public function removeFromCart($productId){

        Product::findOrFail($productId);

        $cart = session()->get("cart", []);

        if(isset($cart[$productId])){
            unset($cart[$productId]);
            session()->put("cart", $cart);
        }

        return redirect()->back()->with('success', 'Produit supprimé du panier !');
    }
}