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

       $json = json_decode($request-> getBody(), true);
       $valid = $json["valid"];

       if($valid){
           setcookie('client_id', $json['client_id'],time()+60*60*24*365, '/');
           setcookie('token_id', $json['token_id'],time()+60*60*24*365, '/');
           return view('web.index');
       }
       $message = $json['message'];

       return view('web.errorPage')->with('message',$message);

    }
}
