<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public $name;
    public $messageContent;
    public $email;
    public $subject;

    public function __construct($name, $email, $messageContent, $subject)
    {
        $this->name = $name;
        $this->messageContent = $messageContent;
        $this->email = $email;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)->view("email");
    }
}