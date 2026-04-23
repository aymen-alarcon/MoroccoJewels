<?php

namespace App\Http\Controllers;

use App\Service\OrderService;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    protected OrderService $orderService;

    public function __construct($orderService)
    {
        $this->orderService = $orderService;
    }
    public function index(Request $request)
    {
        $orders = $this->orderService->getAllOrders($request);

        return view("Admin.Orders.Index", compact("orders"));
    }

    public function store(Request $request, Order $order)
    {
        $orderId = $this->orderService->storeOrder($request, $order);
        
        return redirect()->route("OrderItem.store", ["order_id" => $orderId]);
    }

    public function update(Request $request, Order $order){
        $validate = $request->validate([
            "status" => "required",
        ]);

        $order->update($validate);

        if(Auth::user()->role_id !== 1){
            $message = "the Admin have just update your order's product's status to " . $validate["status"];
            return redirect()->route("notification", [$order->user->id, $message]);
        }


        return back()->with("success", "You have successfully updated this order's status");
    }
}
