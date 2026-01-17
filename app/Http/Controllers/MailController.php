<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\mailApp;
use App\Mail\mailReply;
use App\Models\MailEntry;
use App\Models\Review;
use Twilio\Rest\Client;

class MailController extends Controller
{
    function mailApp(Request $req)
    {

        // 1. Validate 'name' (Matches your HTML form name="name")
        $req->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'service' => 'required',
            'message' => 'required|min:10'
        ]);

        // 2. Save to Database
        $mailDB = new MailEntry();
        $mailDB->name = $req->name;
        $mailDB->email = $req->email;
        $mailDB->subject = $req->service;
        $mailDB->message = $req->message;
        $mailDB->save();

        // 3. Prepare Data
        $to = "amitnayak121003@gmail.com";
        $email = $req->email;
        $sub = $req->service;
        $msg = $req->message;
        $name = $req->name;

        // 4. Send Email
        try {
            Mail::to($to)->send(new mailApp($msg, $sub, $name, $email));
        } catch (\Exception $e) {
            // Return back with error message if mail fails
            return redirect()->back()->with('error', 'Mail Error: ' . $e->getMessage())->withInput();
        }

        return redirect()->back()->with('success', 'Thank you! We have received your message.');
    }

    public function viewMessages()
    {
        $messages = MailEntry::orderBy('created_at', 'desc')->get();
        return view('back-end.viewClient', compact('messages'));
    }

    // public function viewReview()
    // {
    //     $msgreview = Review::orderBy('created_at', 'desc')->get();
    //     return view('back-end.viewreview', compact('msgreview'));
    // }
    public function sendReply(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'reply_message' => 'required'
        ]);

        $email = $request->email;
        $msg = $request->reply_message;
        $sub = "Re: " . $request->original_subject;
        $name = "Client";

        Mail::to($email)->send(new mailReply($msg, $sub, $name, $email));
        return back()->with('success', 'Reply sent successfully to ' . $email);
    }
}
