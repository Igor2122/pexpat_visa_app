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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('frontpage');
    });

    Route::resource('notebooks', 'NotebooksController');
    Route::resource('notes', 'NotesController');

    Route::get('notes/{notebookId}/createNote', 'NotesController@createNote')->name('notes.createNote');
});

Route::get('upload', 'BudgetController@showForm');
Route::post('upload', 'BudgetController@store');

Auth::routes();


// Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('visa_file_upload', 'VisaStatusController@index');
Route::post('visa_file_upload', 'VisaStatusController@storeData');
