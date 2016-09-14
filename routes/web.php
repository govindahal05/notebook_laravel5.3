<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', function () {

    return view('frontpage');
});


Route::get('/bootstrap', function () {
    return view('firstbootstrap');
});
Route::get('/notebooks', function () {
    return view('notebooks.index');
});

