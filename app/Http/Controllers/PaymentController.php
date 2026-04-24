<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("stripe.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Payment $payment)
    {
        $validate = $request->validate([
            "method" => "required",
            "email" => "required",
            "status" => "required",
            "name" => "required",
            "currency" => "required",
        ]);

        $validate['total_price'] = str_replace(',', '', $request->input('total_price'));
        $validate['amount'] = str_replace(',', '', $request->input('total_price'));

        $payment->create($validate);
        
        $cart = session("cart");

        foreach($cart as $productInCart){
            $product = Product::findOrFail($productInCart["id"]);
            $product->decrement("stock", $productInCart["quantity"]);
        }

        session()->forget('cart');

        return redirect()->route("Client.Cart")->with("success", "Payment have went through successfully");
    }
}
