<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class mostrarUsuarisController extends Controller
{
    public function mostrarUsuaris($uuid)
    {


        $client = new client();
        
        

        $url = 'calendar.darkaqua.net:8080/Company/Users';
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
           return view('web.mostrarUsuaris')->with('array_usuaris', $array_usuaris);;
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }


    public function mostrarUsuarisGrups($uuid, $id)
    {


        $client = new client();
        
        

        $url = 'calendar.darkaqua.net:8080/Company/Group/Users';
        $request = $client->request( 'GET', $url, [
         'headers' => [
                 'Content-Type' => 'application/json', 
                 'client_id' => $_COOKIE['client_id'], 
                 'client_token' => $_COOKIE['client_token']
             ],
             'json' => [
                 'company_uuid' =>  $uuid,
                 'group_id' => $id
             ] 
        ]);
                 $json = $request-> getBody();
                 $array_usuaris = json_decode($json, true);
    
    
       

        $valid = json_decode($json, true);

       if($valid){
           return view('web.mostrarUsuaris')->with('array_usuaris', $array_usuaris);;
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }

    public function mostrarUsuarisEvents($uuid, $id, $idEvent)
    {


        $client = new client();
        
        

        $url = 'calendar.darkaqua.net:8080/Company/Group/Date/Users';
        $request = $client->request( 'GET', $url, [
         'headers' => [
                 'Content-Type' => 'application/json', 
                 'client_id' => $_COOKIE['client_id'], 
                 'client_token' => $_COOKIE['client_token']
             ],
             'json' => [
                 'company_uuid' =>  $uuid,
                    'group_id' => $id,
                    'date_id' => $idEvent

             ] 
        ]);
                 $json = $request-> getBody();
                 $array_usuaris = json_decode($json, true);
    
    
       

        $valid = json_decode($json, true);

       if($valid){
           return view('web.mostrarUsuaris')->with('array_usuaris', $array_usuaris);;
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }

}
