<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Order::query();

        $status = $request->query("status");

        if ($status === "all") {
            $orders = $query->get();
        } else if($status === "pending"){
            $orders = $query->where("status", "pending")->get();
        }else if($status === "delivered"){
            $orders = $query->where("status", "delivered")->get();
        }else if($status === "canceled"){
            $orders = $query->where("status", "canceled")->get();
        }
            
        return view("Admin.Orders.Index", compact("orders"));
    }

    public function store(Request $request, Order $order)
    {
        $cart = session("cart");

        $totalPrice = 0;

        foreach ($cart as $cartItem) {
            $totalPrice += $cartItem["price"];
        }

        $validate = $request->validate([]);

        $validate["total_price"] = $totalPrice;
        $validate["status"] = "pending";
        $validate["user_id"] = Auth::user()->id;

        $newOrder = $order->create($validate);  
        
        $orderId = $newOrder->id;
        
        return redirect()->route("OrderItem.store", ["order_id" => $orderId]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function destroy(Order $Order)
    {
        $Order->delete();

        return redirect()->route("Admin.Orders.Index");
    }
}
