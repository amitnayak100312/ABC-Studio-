<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailApp;

class MailController extends Controller
{
    function mailApp(Request $req){
        
        // 1. Validate inputs (Optional but recommended)
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required',
            'message' => 'required | min:10'
        ]);

        $name = $req->name;
        $to = "amitnayak121003@gmail.com"; 
        $email = $req->email;
        $sub = $req->service;
        $msg = $req->message;

        // 2. Send the Mail
        Mail::to($to)->send(new mailApp($msg, $sub, $name, $email));

        // 3. Redirect back with a Flash Message
        return redirect()->back()->with('success', value: 'Thank you! We have received your message and will contact you shortly.');
    }
}
