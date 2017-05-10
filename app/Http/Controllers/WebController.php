<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Web;

class WebController extends Controller
{

    public function index(){

        $webs = Web::all();
        return view('web.weblist')->with('webs',$webs);  
    }

    public function create()
    {
        return view('web.webadd');
    }

    public function store(Request $request)
    {
        $newweb = Web::create($request->all());
        return redirect('webs');
        
    }

    public function show($id)
    {
        $web= Web::find($id);
        return view('web.webform')->with('web',$web);
    }



}
