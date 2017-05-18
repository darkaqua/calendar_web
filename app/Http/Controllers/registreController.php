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
       $surname=  $request [ 'surname'];
       $email = $request [ 'email'];
       $reemail = $request [ 'reEmail'];
       $password = $request [ 'Password'];
       $rePassword = $request [ 'rePassword'];

       $url = 'calendar.darkaqua.net:8080/Account/Register';
       $request = $client->request('POST', $url, [
           'json' => [
                'name' => 'felipe',
                'username' => 'felipe',
                'email' => 'felipe@gmail.com',
                're_email' =>'felipe@gmail.com',
                'password'=> '123456789',
                're_password'=> '123456789',
                'telephone' =>'688415700',
                'country'=>'ES'
           ]
       ]);

       $json = $request-> getBody();
       $valid = json_decode($json, true)["valid"];
       $message = json_decode($json, true)["message"];

       if($valid){
           return view('web.index');
       }

       return view('web.errorPage')->with('message',$message);

    }
}
