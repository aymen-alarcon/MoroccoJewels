<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $OrderItems = OrderItems::all();
        return view("Admin.OrderItems", compact("OrderItems"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, OrderItems $OrderItems, $orderId)
    {
        $cart = session("cart");
        foreach ($cart as $cartItem) {
            $validate = $request->validate([]);

            $validate["product_name"] = $cartItem["name"];
            $validate["price"] = $cartItem["price"];
            $validate["quantity"] = $cartItem["quantity"];
            $validate["order_id"] =  $orderId;

            $OrderItems->create($validate);
        }

        session()->forget('cart');

        return redirect()->route("Profile.index")->with("success", "Your Order have just been Submitted successfully");
    }
}