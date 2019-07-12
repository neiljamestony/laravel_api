<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// list all customers

Route::get('customers', 'CustomerController@index');

// list single customers

Route::get('customers/{id}', 'CustomerController@show');

// Create new customers

Route::post('customer', 'CustomerController@store');

// update customers

Route::put('customers', 'CustomerController@store');

// delete customer

Route::delete('customers/{id}', 'CustomerController@destroy');
