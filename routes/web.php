<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts\index');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login/google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::resource('user','UserController');

Route::resource('class','ClassElectionController');

Route::get('request/{id}','RequestController@show_list');

Route::resource('admin','AdminController');
