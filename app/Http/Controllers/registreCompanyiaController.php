<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use App\Http\Requests;

class registreController extends Controller
{
    public function registreEmpresa(Request $request)
    {

        $client = new client();
        $name= $request [ 'name'];
       $userName=  $request [ 'userName'];
       $email = $request [ 'email'];
       $reEmail = $request [ 'reEmail'];
       $password = $request [ 'Password' ];
       $rePassword = $request [ 'rePassword' ];
       $telefon = $request [ 'telefon' ];

       $url = 'calendar.darkaqua.net:8080/Account/Register';
       $request = $client->request('POST', $url, [
           'json' => [
                'name' => $name,
                'username' => $userName,
                'email' => $email,
                're_email' =>$reEmail,
                'password'=> $password,
                're_password'=> $rePassword,
                'telephone' =>$telefon,
                'country'=>'ES'
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
