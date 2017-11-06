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

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', 'Controller@index');

Route::get('/home', 'UserController@profile');

Route::get('/users', 'UserController@index');

Route::get('/users/{user}', 'UserController@getUser');
Route::post('/users/{user}','ComplimentController@create');

Route::get('/compliments/received', 'ComplimentController@receivedCompliments');
Route::get('/compliments/given', 'ComplimentController@givenCompliments');