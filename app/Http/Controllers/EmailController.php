<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class EmailController extends Controller
{
    public function sendEmail()
    {
        $toEmail = 'benhamououssama02@gmail.com';	// Receiver Email Address
        $message = 'This is a test email';	// Email Body
        $Subject = 'Test Email';	// Email Subject
        
        $response = Mail::to($toEmail)->send(new MyEmail($message, $Subject));
        dd($response);
}
}