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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("Admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, OrderItems $OrderItems)
    {
        $validate = $request->validate([
            "product_name" => "required",
            "price" => "required",
            "quantity" => "required",
            "order_id" => "required"
        ]);

        $OrderItems->create($validate);

        // return redirect()->route("Admin.OrderItems");
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderItems $OrderItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderItems $OrderItems)
    {
        $OrderItems = OrderItems::all();
        // return view("Admin.edit", compact("OrderItems"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderItems $OrderItems)
    {
        $validate = $request->validate([
            "product_name" => "required",
            "price" => "required",
            "quantity" => "required",
            "order_id" => "required|exists:orders,id"
        ]);

        $OrderItems->update($validate);

        // return redirect()->route("Admin.OrderItems");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderItems $OrderItems)
    {
        $OrderItems->delete();

        return view("Admin.OrderItems");
    }
}
