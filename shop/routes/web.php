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
    return view('welcome');
});

Route::get('index',[
	'as' => 'trang-chu',
	'uses' => '\App\Http\Controllers\PageController@getIndex'
]);

Route::get('register',[
	'as' => 'register',
	'uses' => '\App\Http\Controllers\PageController@getRegister'
]);

Route::get('login',[
	'as' => 'login',
	'uses' => '\App\Http\Controllers\PageController@getLogin'
]);

Route::get('shopping',[
	'as' => 'shopping',
	'uses' => '\App\Http\Controllers\PageController@getShopping'
]);

Route::get('info',[
	'as' => 'info',
	'uses' => '\App\Http\Controllers\PageController@getInfo'
]);