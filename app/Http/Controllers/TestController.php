<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Auth;
use TwilioMsg;


class TestController extends Controller
{
    
   	public function test()
   	{
   		return view('test');
   	}

   	public function proceed(Request $request)
    { 


        $recipients = Auth::user()->mobile;
       

        $msg_test = 'Hey%0a'. '%0a' . Auth::user()->fname;

        $msg = urlencode($msg_test);


        
        $this->sendMessage($msg, $recipients);

        
        return back()->with(['success' => "Messages on their way!"]);
    }


   	// private function sendMessage($message, $recipients)
    // {
    //     $account_sid = getenv("TWILIO_SID");
    //     $auth_token = getenv("TWILIO_AUTH_TOKEN");
    //     $twilio_number = getenv("TWILIO_NUMBER");
    //     $client = new Client($account_sid, $auth_token);
    //     $client->messages->create($recipients, ['from' => $twilio_number, 'body' => $message]);
    // }

   

}
