<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view("Admin.Orders.Index", compact("orders"));
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
