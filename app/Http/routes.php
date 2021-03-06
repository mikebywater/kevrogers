<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/test', function(){

    	return view('test');
    });

    Route::get('/home', 'HomeController@index');
});


Route::group(['middleware' => ['web', 'auth'] ], function () {
	Route::resource('customers', 'CustomersController');
});

Route::group(['middleware' => ['web' , 'auth']], function () {
	Route::resource('jobs', 'JobsController');
});
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::resource('estimates', 'EstimatesController');
});
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::resource('invoices', 'InvoicesController');
});
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::resource('transactions', 'TransactionsController');
});