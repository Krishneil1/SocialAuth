<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/login/{service}','Auth\SocialLoginController@redirect');//this two will handle varius social network
Route::get('/login/{service}/callback','Auth\SocialLoginController@callback');//this two will handle varius social network