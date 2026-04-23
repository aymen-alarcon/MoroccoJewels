<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use App\Service\OrderItemsService;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    protected OrderItemsService $orderItemsService;

    public function __construct(OrderItemsService $orderItemsService)
    {
        $this->orderItemsService = $orderItemsService;
    }
    public function index($orderId)
    {
        $order = Order::findOrFail($orderId);
        $OrderItems = OrderItems::where("order_id", $orderId)->get();
        return view("Home.OrderItems", compact("OrderItems", "order"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, OrderItems $OrderItems, $orderId)
    {
        $this->orderItemsService->storeOrderItem($request, $OrderItems, $orderId);

        return redirect()->route("stripe.index");
    }
}