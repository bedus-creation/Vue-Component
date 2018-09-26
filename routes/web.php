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

Route::get('/dynamic', function () {
    return view('dynamic');
});

Route::get('/wizard', function () {
    return view('wizard');
});

Route::get('sweet',function(){
    return view('sweet');
});

Route::get('modal',function(){
    return view('modal');
});

Route::post('posts','PostsController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
