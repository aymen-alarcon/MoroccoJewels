<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Infobip\Configuration;
use Infobip\ApiException;
use Infobip\Model\SmsRequest;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsMessage;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsTextContent;
use GuzzleHttp\Client;

class SendSMSController extends Controller
{
    public function sendSMS(Request $request)
    {
        $configuration = new Configuration(
            host: env('INFOBIP_BASE_URL'),
            apiKey: env('INFOBIP_API_KEY')
        );

        $client = new Client([
            'verify' => false,
        ]);

        $sendSmsApi = new SmsApi(
            config: $configuration,
            client: $client
        );

        $messages = [];

        foreach (session("cart", []) as $key => $value) {
            $messages[] = new SmsMessage(
                destinations: [
                    new SmsDestination(
                        to: '+212629474030'
                    )
                ],
                content: new SmsTextContent(
                    text: 'User ' . Auth::user()->id . ' ordered product: ' . $key
                ),
                sender: 'TresorBerber'
            );
        }

        $smsRequest = new SmsRequest(messages: $messages);

        try {
            $smsResponse = $sendSmsApi->sendSmsMessages($smsRequest);

            session()->forget('cart');

            return redirect()->route("Client.Cart")->with("success", "Message sent successfully");

        } catch (ApiException $e) {
            return back()->with("failed", "SMS failed: " . $e->getMessage());
        }
    }
}