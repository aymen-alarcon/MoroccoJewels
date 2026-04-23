<?php

namespace App\Service;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    public function getAllOrders(Request $request){
        $query = Order::query()->latest();

        $status = $request->query("status");

        if ($status === "all") {
            $query->get();
        } else if($status === "pending"){
            $query->where("status", "pending")->latest()->paginate(8);
        }else if($status === "delivered"){
            $query->where("status", "delivered")->latest()->paginate(8);
        }else if($status === "canceled"){
            $query->where("status", "canceled")->latest()->paginate(8);
        }

        $orders = $query->get();
        return $orders;
    }

    public function storeOrder(Request $request, Order $order){
        $cart = session("cart");

        $totalPrice = 0;

        foreach ($cart as $cartItem) {
            $totalPrice += $cartItem["price"];
        }

        $validate = $request->validate([]);

        $validate["total_price"] = $totalPrice;
        $validate["status"] = "Pending";
        $validate["user_id"] = Auth::user()->id;

        $newOrder = $order->create($validate);  
        
        $orderId = $newOrder->id; 
        
        return $orderId;   
    }
}