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
        $messges = "Hello Cheking msg";
        $twilio = new Client($sid, $token);
        
         $message = $twilio->messages
      ->create("whatsapp:+918980785634", // to
        array(
          "from" => 'whatsapp:'.$clientnumber,
          "contentSid" => "HXb5b62575e6e4ff6129ad7c8efe1f983e",
          "contentVariables" => "{"1":"12/1","2":"3pm"}",
          "body" => "Your Message"
        )
      );

print($message->sid);
    }
}
