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

//Route::get('/', function () {
   // return view('IndexController@index');
//});

Route::post('/locale', array(
	'before' => 'csrf',
    'uses' => 'LanguageController@index'
     ));

Route::get('/','IndexController@index');
Route::get('/result','IndexController@result');
Route::get('/location','LocationController@index');
Route::post('location', 'LocationController@index');