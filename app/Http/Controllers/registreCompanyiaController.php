<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class registreCompanyiaController extends Controller
{
    public function registreCompanyies(Request $request)
    {

        $client = new client();
        
        $companyName= $request [ 'companyName'];
        $descripcio = $request ['descripcio'];

       $url = 'calendar.darkaqua.net:8080/Company';
       $request = $client->request( 'PUT', $url, [
        'headers' => [
                'Content-Type' => 'application/json', 
                'client_id' => $_COOKIE['client_id'], 
                'client_token' => $_COOKIE['client_token']
            ],
        'json' => [
                'name' => 'pepeeeeeeeeeeeeeeeeeee',
                'description' => 'asdasdasdasd',
                'country'=>'ES'             
           ]
       ]);

       $json = $request-> getBody();
       $valid = json_decode($json, true);

       if($valid){
           return view('web.showCompanies');
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
