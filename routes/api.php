<?php

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

Route::prefix('notes')->group(function () {
    Route::get('/', 'NoteController@index');
});

Route::prefix('tags')->group(function () {
    Route::get('/', 'TagController@index');
    Route::post('/', 'TagController@create');
    Route::put('/', 'TagController@update');
});