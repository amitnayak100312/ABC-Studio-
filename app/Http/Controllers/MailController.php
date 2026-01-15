<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\mailApp;
use App\Mail\mailReply;
use App\Models\MailEntry;

class MailController extends Controller
{
    function mailApp(Request $req){
        
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'service' => 'required', 
            'message' => 'required|min:10'
        ]);

        $mailDB = new MailEntry();
        $mailDB->name = $req->name;
        $mailDB->email = $req->email;
        $mailDB->subject = $req->service; 
        $mailDB->message = $req->message;
        $mailDB->save();

        $name = $req->name;
        $to = "amitnayak121003@gmail.com"; 
        $email = $req->email;
        $sub = $req->service;
        $msg = $req->message;

        Mail::to($to)->send(new mailApp($msg, $sub, $name, $email));

        return redirect()->back()->with('success', 'Thank you! We have received your message and will contact you shortly.');
    }
    
    public function viewMessages(){
        $messages = MailEntry::orderBy('created_at', 'desc')->get();
        return view('back-end.viewClient', compact('messages'));
    }
    
    public function sendReply(Request $request){
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