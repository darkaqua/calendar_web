<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('web.index');
    });
Route::get('/web/test.blade.php', function () {
    return view('web.test');
    });
Route::get('/web/registre.blade.php', function () {
    return view('web.registre');
    });
    Route::get('/web/calendar.blade.php', function () {
    return view('web.calendar');
    });
Route::get('add', function () {
    return view('web.webadd');
    });

Route::get('tarifa', function (){
   return view('web.tarifa');
});


Route::resource('webs','WebController');
Route::get('/pagament','pagament@paymentPage');