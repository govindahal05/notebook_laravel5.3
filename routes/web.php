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

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware'=>'auth'],function(){
  Route::get('/', function () {

        return view('frontpage');
    });
   /* Route::get('/notebooks', ['as'=>'notebooks.index','uses'=>'NotebooksController@index']);
    Route::post('/notebooks', 'NotebooksController@store');

    Route::get('/notebooks/create', 'NotebooksController@create');
    Route::get('/notebooks/{notebook}', 'NotebooksController@show')->name('notebooks.show');
    Route::get('/notebooks/{notebook}/edit', 'NotebooksController@edit')->name('notebooks.edit');
    Route::put('/notebooks/{notebook}', 'NotebooksController@update');
    Route::delete('/notebooks/{notebook}', 'NotebooksController@destroy');*/

    Route::resource('notes','NotesController');
    Route::resource('notebooks','NotebooksController');

    Route::get('notes/{notebookId}/CreateNote','NotesController@createNote')->name('notes.createNote');

});


