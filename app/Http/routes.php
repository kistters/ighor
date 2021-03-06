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
    return view('welcome');
});

/* usar resource */
#Route::get('/client/create','ClientController@create');

#

#Route::get('/client/{id}','ClientController@show');

Route::resource('client', 'ClientController');

Route::post('/client/search','ClientController@search');


Route::resource('appointment', 'AppointmentController');