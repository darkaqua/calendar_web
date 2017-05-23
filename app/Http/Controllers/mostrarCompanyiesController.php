<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class mostrarCompanyiesController extends Controller
{
    public function mostrarCompanyia(Request $request)
    {


        $client = new client();
        
        

       $url = 'calendar.darkaqua.net:8080/User/Companies';
       $request = $client->request( 'GET', $url, [
        'headers' => [
                'Content-Type' => 'application/json', 
                'client_id' => $_COOKIE['client_id'], 
                'client_token' => $_COOKIE['client_token']
            ]     
       ]);
                $json = $request-> getBody();
                $array_companyies = json_decode($json, true);
      //  echo ($request->getBody());
    
       

       $valid = json_decode($json, true);

       if($valid){
           return view('web.llistaCompanyies')->with('array_companyies', $array_companyies);
       }
       $message = json_decode($json, true)['message'];

        return view('web.errorPage')->with('message', 'No hi ha cap companyia');

    }
}
