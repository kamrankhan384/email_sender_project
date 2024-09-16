<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Mail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Mail from Laravel Application',
            'body' => 'This is a test email sent from Laravel.'
        ];

        $recipients = ['recipient1@example.com', 'recipient2@example.com', 'recipient3@example.com'];

        Mail::to($recipients)->send(new TestEmail($details));
        return "Email Sent Successfully!";
    }
}
