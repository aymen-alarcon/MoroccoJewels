<?php

namespace App\Service;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsService
{
    public function storeOrderItem(Request $request, OrderItems $OrderItems, $orderId){
        $cart = session("cart");
        foreach ($cart as $cartItem) {
            $validate = $request->validate([]);

            $validate["product_name"] = $cartItem["name"];
            $validate["price"] = $cartItem["price"];
            $validate["quantity"] = $cartItem["quantity"];
            $validate["order_id"] =  $orderId;

            $OrderItems->create($validate);
        }
    }
}