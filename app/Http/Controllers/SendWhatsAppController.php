<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendWhatsAppController extends Controller
{
    public function sendWhatsApp()
    {
        try {
            $cart = session('cart', []);

            if (empty($cart)) {
                return back()->with('failed', 'Cart is empty');
            }

            $userName = Auth::user()->first_name . " " . Auth::user()->last_name ?? 'Customer';
            $userPhone = Auth::user()->phone ?? null;

            $messageText = "🛒 New Order Received\n\n";
            $messageText .= "Customer: {$userName}\n\n";
            $messageText .= "Products:\n";

            $total = 0;
            foreach ($cart as $item) {
                $name = $item['name'] ?? 'Product';
                $price = $item['price'] ?? 0;
                $qty = $item['quantity'] ?? 1;
                $subtotal = $price * $qty;
                $total += $subtotal;
                $messageText .= "- {$name} ({$qty}x) = {$subtotal} MAD\n";
            }

            $messageText .= "\nTOTAL: {$total} MAD";

            $businessNumber = env('BUSINESS_WHATSAPP_NUMBER', '212645412801'); // Your number

            $encodedMessage = urlencode($messageText);

            $whatsappUrl = "https://wa.me/{$businessNumber}?text={$encodedMessage}";

            session()->forget('cart');

            return redirect()->away($whatsappUrl);

        } catch (\Exception $e) {
            \Log::error('Exception: ' . $e->getMessage());
            return back()->with('failed', 'Error: ' . $e->getMessage());
        }
    }
}