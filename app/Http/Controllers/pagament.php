<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagament extends Controller
{
    public function paymentPage()
    {
        return view('web.payment_option');
    }
}
