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

// id sit
Route::get('/buy/{id}', 'buyController@index');
Route::get('/buy/{id}/confirm', 'buyController@confirm')->middleware('isLogued');

Route::get('/buy/{id}/confirm/{confirmed}', 'buyController@confirm')->middleware('isLogued');

Route::get('/register', 'authController@register');
Route::post('/register', 'authController@doRegister');

Route::get('/profile', 'profileController@index')->middleware('isLogued');

Route::get('/login', 'authController@login');
Route::post('/login', 'authController@doLogin');

Route::get('/logout', 'authController@logout');

Route::post('/changePassword', 'authController@changePassword')->middleware('isLogued');

//  Route::get('hello', 'ejemploController@hello');
