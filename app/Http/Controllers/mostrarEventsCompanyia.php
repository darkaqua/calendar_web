<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class mostrarEventsCompanyia extends Controller
{
    public function mostrarEvents(Request $request)
    {


        $client = new client();
        
        

       $url = 'calendar.darkaqua.net:8080/Company/Group/Dates';
       $request = $client->request( 'GET', $url, [
        'headers' => [
                'Content-Type' => 'application/json', 
                'client_id' => $_COOKIE['client_id'], 
                'client_token' => $_COOKIE['client_token']
            ]  ,

        'json' => [
                 'company_uuid' =>  $uuid,
                 'group_id' => $id
             ]   
       ]);
                $json = $request-> getBody();
                $array_events = json_decode($json, true);
      //  echo ($request->getBody());
    
       

       $valid = json_decode($json, true);

       if($valid){
           return view('web.showCompanies')->with('array_events', $array_events);
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
