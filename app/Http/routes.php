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

Route::get('/', 'homeController@index');

Route::get('/routes', 'routesController@index');

// id route
Route::get('/scheduls/{id}', 'schedulsController@index');

// id schedul
Route::get('/sits/{id}', 'busSitsController@index');

//  Route::get('hello', 'ejemploController@hello');
