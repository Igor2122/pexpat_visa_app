<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('cal', 'gCalendarController');
Route::get('oauth', 'gCalendarController@oauth')->name('oauthCallback');

Route::get('visa_file_upload', 'VisaStatusController@index');
Route::get('search/{id}', 'VisaStatusController@show');
