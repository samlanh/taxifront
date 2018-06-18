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
Route::get('/search','IndexController@result');
Route::get('/location','LocationController@index');
Route::post('location', 'LocationController@index');

//for cutomer
Route::get('/auth/sign_in','CustomerController@index');
Route::post('/auth/auth-signin', array(
	'before' => 'csrf',
    'uses' => 'CustomerController@index'
 ));
Route::get('/auth/sign_up','CustomerController@signup');
Route::post('/auth/auth-signup', array(
	'before' => 'csrf',
    'uses' => 'CustomerController@create'
 ));



// Route::group(['middlewareGroups' => ['web']], function () {

	
// 	//For API
//    Route::get('/api/searchtaxi', ['uses' => 'ApiSearchTaxiController@index']);
// });