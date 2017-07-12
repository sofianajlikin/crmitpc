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
    return view('admin.layout');
});
/*Route::get('/cevent', function () {
    return view('admin.cevent');
});
*/
Route::get('/cevent1', function () {
    return view('admin.eclient1');
});


/*Route::get('/clients', function () {
    return view('admin.client');
});*/
/*Route::get('/Dashboard', function () {
    return view('admin.Dashboard');
});*/
/*Ro});ute::get('/clientpage', function () {
    return view('admin.clientPage');
});*/


/*Route::get('/VClient', function () {
    return view('admin.vClient');
});*/

/*Route::post('/VClient', function () {
    return view('admin.vClient');
});*/

Route::post('/cname', 'ClientController@store')->name('cname');
Route::get('/clients', 'ClientController@add1')->name('clients');
Route::get('/VClient', 'ClientController@index')->name('VClient'); 
Route::get('/VLead', 'ClientController@index_lead')->name('VLead'); 
Route::get('/EClient/{id}', 'ClientController@update')->name('EClient');
Route::get('/clientpage/{id}', 'ClientController@view');
Route::post('/clientpage/cevent', 'eventController@store');
Route::post('/clientpage/cqoute', 'quotecontroller@store');
Route::get('/Dashboard', 'dashcontroller@view')->name('Dashboard');
Route::get('/task', 'taskcontroller@view')->name('task');

Route::get('/VQoute', 'quotecontroller@Qindex')->name('VQoute'); 




