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


Route::get('posts', 'Api\PostController@index');
Route::get('posts/{id}', 'Api\PostController@show');
Route::post('posts', 'Api\PostController@create');
Route::post('posts/{id}', 'Api\PostController@edit');
Route::put('posts/{id}', 'Api\PostController@update' );
Route::delete('posts/{id}', 'Api\PostController@destroy'); 



Route::group(['middleware' => 'auth:api'], function(){

    Route::get('logout', 'Api\AuthController@logout');

});
