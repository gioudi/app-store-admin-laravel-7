<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');



/* Users */
Route::get('users', 'Api\UsersController@index');
Route::get('user-detail/{id}', 'Api\UsersController@show');
Route::get('user-detail/edit/{id}', 'Api\UsersController@edit');
Route::put('user-detail/edit/{id}', 'Api\UsersController@update');
Route::delete('user-detail/{id}', 'Api\UsersController@delete');


/* Cities */
Route::get('cities', 'Api\CityController@index');
Route::get('cities-detail/{id}', 'Api\CityController@show');
Route::get('cities-detail/edit/{id}', 'Api\CityController@edit');
Route::post('cities', 'Api\CityController@store');
Route::put('cities-detail/edit/{id}', 'Api\CityController@update');
Route::delete('cities-detail/{id}', 'Api\CityController@destroy');

/* Clients */
Route::get('clients', 'Api\ClientController@index');
Route::get('clients-detail/{id}', 'Api\ClientController@show');
Route::get('clients-detail/edit/{id}', 'Api\ClientController@edit');
Route::post('clients', 'Api\ClientController@store');
Route::put('clients-detail/edit/{id}', 'Api\ClientController@update');
Route::delete('clients-detail/{id}', 'Api\ClientController@destroy');



Route::group(['middleware' => 'auth:api'], function(){

    Route::get('logout', 'Api\AuthController@logout');

});
