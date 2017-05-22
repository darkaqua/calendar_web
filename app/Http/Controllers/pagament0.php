<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class pagament0 extends Controller
{
    public function paymentController0(Request $request)
    {
        $client = new client();

        // $payment_id1 = $request ['1'];
        // $payment_id2 = $request ['2'];
        // $payment_id3 = $request ['3'];

 $url = 'calendar.darkaqua.net:8080/Account/Payment';
        $request = $client->request( 'POST', $url, [
        'headers' => [
                'Content-Type' => 'application/json', 
                'client_id' => $_COOKIE['client_id'], 
                'client_token' => $_COOKIE['client_token']
            ],
        'json' => [
                'payment_id' => '1'            
           ]
       ]);

        


     $json = $request-> getBody();
       $valid = json_decode($json, true)["valid"];

       if($valid){
           return view('web.index');
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
