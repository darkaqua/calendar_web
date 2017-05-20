<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class loginController extends Controller
{
    public function registreLogin(Request $request)
    {

        $client = new client();
        $userName= $request [ 'userName'];
        $userPassword = $request ['userPassword'];
        

       $url = 'calendar.darkaqua.net:8080/Account/Login';
       $request = $client->request('POST', $url, [

           'json' => [
                'email' => $name,
                'password' => $userPassword
                
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
