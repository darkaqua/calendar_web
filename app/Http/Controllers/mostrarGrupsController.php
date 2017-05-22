<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class mostrarGrupsController extends Controller
{
    public function mostrarGrups($uuid)
    {


        $client = new client();
        
        

        $url = 'calendar.darkaqua.net:8080/Company/Groups';
        $request = $client->request( 'GET', $url, [
         'headers' => [
                 'Content-Type' => 'application/json', 
                 'client_id' => $_COOKIE['client_id'], 
                 'client_token' => $_COOKIE['client_token']
             ],
             'json' => [
                 'company_uuid' =>  $uuid
             ] 
        ]);
                 $json = $request-> getBody();
                 $array_usuaris = json_decode($json, true);
    
    
       

        $valid = json_decode($json, true);

       if($valid){
           return view('web.mostrarGrups')->with('array_grups', $array_grups);;
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
