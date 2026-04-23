<?php

namespace App\Service;

use App\Models\Product;

class CartService
{
    public function add(int $productId): void
    {
        $product = Product::findOrFail($productId);

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'id'       => $product->id,
                'name'     => $product->name,
                'price'    => $product->price,
                'category' => $product->category->name,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);
    }
}