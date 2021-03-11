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

Route::get('/index', function(){
    'as' => 'trang-chu',
    'uses' => '\App\Http\Controllers\PageController@getIndex'
    return view('index');
});

Route::get('/register', function() {
    'as' => 'register',
    'uses' => '\App\Http\Controllers\PageController@getRegister'
    return view('dangky');
});

Route::get('/login', function(){
    'as' => 'login',
    'uses' => '\App\Http\Controllers\PageController@getLogin'
    return view('dangnhap');
});

Route::get('/shopping',function() {
    'as' => 'shopping',
    'uses' => '\App\Http\Controllers\PageController@getShopping'
    return view('shopping');
});

Route::get('/info',function() {
    'as' => 'info',
    'uses' => '\App\Http\Controllers\PageController@getInfo'
    return view('info');
});
