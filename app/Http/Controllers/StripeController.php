<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index()
    {
        return view('stripe.index');
    }

    public function checkout()
    {        
        $lineItems = [];

        foreach (session("cart") as $item) {
            $lineItems [] = [
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' => $item["name"],
                    ],
                    'unit_amount' => $item["price"] * 100,
                ],
                'quantity' => $item["quantity"],
            ];
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'metadata' => [
                'type' => 'send_money',
            ],
            'mode' => 'payment',
            'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('stripe.index'),
        ]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::retrieve($request->session_id);

        return view('stripe.success', compact('session'));
    }
}