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
        $Orders = Order::all();
        return view("Admin.Orders", compact("Orders"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Order $Order)
    {
        $validate = $request->validate([
            "total_price" => "required",
            "status" => "required",
            "is_deleted" => "required",
            "category_id" => "required"
        ]);

        $Order->create($validate);

        return redirect()->route("Admin.Orders");
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $Order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $Order)
    {
        $Order = Order::all();
        return view("Admin.edit", compact("Order"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $Order)
    {
        $validate = $request->validate([
            "total_price" => "required",
            "status" => "required",
            "is_deleted" => "required",
            "category_id" => "required"
        ]);

        $Order->update($validate);

        return redirect()->route("Admin.Orders");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $Order)
    {
        $Order->delete();

        return view("Admin.Orders");
    }
}
