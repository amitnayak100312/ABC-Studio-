<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{ 
   public function sendmsg(){
        $twilioSid = env('TWILIO_SID');
        $twilioToken = env('TWILIO_AUTH_TOKEN');
        $twilioNumber = env('TWILIO_WHATSAPP_FROM');
        $clientnumber = 'whatsapp:+918980785634';
        $me
    }
}
