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
            $userPhone = Auth::user()->phone ?? null; // Get user's phone number

            // Build message text
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

            // The business number that should RECEIVE the order
            $businessNumber = env('BUSINESS_WHATSAPP_NUMBER', '212645412801'); // Your number

            // URL encode the message
            $encodedMessage = urlencode($messageText);

            // Create WhatsApp click-to-chat link
            // This will open the user's WhatsApp with the message pre-filled
            $whatsappUrl = "https://wa.me/{$businessNumber}?text={$encodedMessage}";

            // Clear the cart
            session()->forget('cart');

            // Option 1: Redirect to WhatsApp
            return redirect()->away($whatsappUrl);

            // Option 2: Show a page with the link (if you prefer)
            // return view('whatsapp-redirect', [
            //     'whatsappUrl' => $whatsappUrl,
            //     'message' => $messageText,
            // ]);

        } catch (\Exception $e) {
            \Log::error('Exception: ' . $e->getMessage());
            return back()->with('failed', 'Error: ' . $e->getMessage());
        }
    }
}