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
       $request = $client->request('POST', $url,[
           'name' => 'felipe',
           'username' => 'felipe',
           'email' => 'felipe@gmail.com',
           're_email' =>'felipe@gmail.com',
           'password'=> '123',
           're_password'=> '123',
           'telephone' =>'688415700',
           'country'=>'ES'
       ]);


       $json = $request-> getBody();
       $arrayJson = json_decode($json, true)["message"];
        var_dump($arrayJson);
    }
}
