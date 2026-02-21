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
        $validate["status"] = "Pending";
        $validate["user_id"] = Auth::user()->id;

        $newOrder = $order->create($validate);  
        
        $orderId = $newOrder->id;
        
        return redirect()->route("OrderItem.store", ["order_id" => $orderId]);
    }

    public function update(Request $request, Order $order){
        $validate = $request->validate([
            "status" => "required",
        ]);

        $order->update($validate);

        return back()->with("success", "You have successfully updated this order's status");
    }
}
