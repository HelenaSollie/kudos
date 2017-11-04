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

Route::get('/', 'ComplimentController@receivedCompliments');

Route::get('/users/index', 'UserController@index');

Route::get('/users/index/{user}', 'UserController@getUser');

Route::get('/compliments/received', 'ComplimentController@receivedCompliments');

Route::get('/compliments/given', function () {
    return view('compliments/given');
});