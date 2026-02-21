<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ]);

        Mail::to('ntaola06@gmail.com')->send(
            new ContactMail(
                $request->name,
                $request->email,
                $request->message,
                $request->subject,
            )
        );

        return redirect()->route("contact")->with("success", "Votre message a été envoyé avec succès !");    
    }
}