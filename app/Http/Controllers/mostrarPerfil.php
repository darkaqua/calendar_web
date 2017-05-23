<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class mostrarPerfil extends Controller
{
    public function mostrarPerfil()
    {


        $client = new client();
        
        

        $url = 'calendar.darkaqua.net:8080/User';
        $request = $client->request( 'GET', $url, [
         'headers' => [
                 'Content-Type' => 'application/json', 
                 'client_id' => $_COOKIE['client_id'], 
                 'client_token' => $_COOKIE['client_token']
             ],
             'json' => [
                 'user_uuid' => "62fed043-8465-409d-9489-6c729ed0b8df"
             ] 
        ]);
                 $json = $request-> getBody();
                 $array_perfil = json_decode($json, true);
    
    


            $valid = json_decode($json, true);

        if($valid){
            return view('web.perfil')

            ->with('array_perfil', $array_perfil);
            
       }

       
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
