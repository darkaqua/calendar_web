<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class mostrarCompanyiaController extends Controller
{
    public function mostrarCompanyies(Request $request)
    {


        $client = new client();
        
        

       $url = 'calendar.darkaqua.net:8080/User/Dates';
       $request = $client->request( 'GET', $url, [
        'headers' => [
                'Content-Type' => 'application/json', 
                'client_id' => $_COOKIE['client_id'], 
                'client_token' => $_COOKIE['client_token']
            ]     
       ]);
                 $json = $request-> getBody();
                $array_events = json_decode($json, true)["data"];

                
       
       $valid = json_decode($json, true)["valid"];
        echo ($request->getBody());
       if($valid){
           return view('web.index');
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
