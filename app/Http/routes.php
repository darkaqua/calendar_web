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
    Route::get('/web/errorPage.blade.php', function () {
    return view('web.errorPage');
    });
    Route::get('/web/companyRegister.blade.php', function () {
    return view('web.companyRegister');
    });
    Route::get('/web/groupRegister.blade.php', function () {
    return view('web.groupRegister');
    });
    Route::get('/web/showCompanies.blade.php', function () {
    return view('web.showCompanies');
    });
    Route::get('/web/showGroups.blade.php', function () {
    return view('web.showGroups');
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
Route::post('/registreComplete', 'registreController@registreEmpresa');
Route::post('/login', 'loginController@registreLogin');
Route::post('/pagament', 'pagament@paymentController');
Route::post('/pagament2', 'pagament2@paymentController2');
Route::post('/pagament0', 'pagament0@paymentController0');

Route::post('/registreCompanyie', 'registreCompanyiaController@registreCompanyies');

Route::get('/mostrarCompanyia', 'mostrarCompanyiaController@mostrarCompanyies');