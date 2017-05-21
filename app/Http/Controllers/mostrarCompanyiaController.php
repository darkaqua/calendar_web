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
        
        





       $url = 'calendar.darkaqua.net:8080/Company';
       $request = $client->request('GET', $url, array('company_uuid => Bar'), [
          
                
           
       ]);

       $json = $request-> getBody();
       $valid = json_decode($json, true)["valid"];
        echo ($request->getBody());
       if($valid){
           return view('web.index');
       }
       $message = json_decode($json, true)['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
