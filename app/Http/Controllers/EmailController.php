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

        Mail::to('recipient@example.com')->send(new TestEmail($details));

        return "Email Sent Successfully!";
    }
}
