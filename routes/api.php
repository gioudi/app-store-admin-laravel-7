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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

/*
Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update' );
Route::delete('articles/{id}', 'ArticleController@delete'); */

Route::get('users', 'Api\UsersController@index');
Route::get('user-detail/{id}', 'Api\UsersController@show');
Route::get('user-detail/edit/{id}', 'Api\UsersController@edit');
Route::put('user-detail/edit/{id}', 'Api\UsersController@update');
Route::delete('user-detail/{id}', 'Api\UsersController@delete');

Route::group(['middleware' => 'auth:api'], function(){
   
    Route::get('logout', 'Api\AuthController@logout');
   
});
