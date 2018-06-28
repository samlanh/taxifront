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
Route::post('/jquerytypeahead/location.json', array(
	'before' => 'csrf',
    'uses' => 'LocationController@pickuplocationc'
 ));
Route::post('/jquerytypeahead/nonlocation.json', array(
	'before' => 'csrf',
    'uses' => 'LocationController@nonlocation'
 ));
Route::post('/search/compare/availablelocation', array(
	'before' => 'csrf',
    'uses' => 'LocationController@comparelocation'
));


Route::get('/location','LocationController@index');
Route::post('location', 'LocationController@index');

Route::get('/taxi/booking', 'BookingController@index');
Route::post('booking/request', 'BookingController@store');

//for cutomer
Route::get('/user/sign_in','CustomerController@index');
Route::post('/user/auth-signin', array(
	'before' => 'csrf',
    'uses' => 'CustomerController@index'
 ));
Route::post('/user/auth-signup', array(
	'before' => 'csrf',
    'uses' => 'CustomerController@create'
 ));




// Route::group(['middlewareGroups' => ['web']], function () {

	
// 	//For API
//    Route::get('/api/searchtaxi', ['uses' => 'ApiSearchTaxiController@index']);
// });