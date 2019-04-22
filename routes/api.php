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

Route::group([], function () {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('signup', 'Auth\AuthController@signup');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('sendPasswordResetLink', 'Auth\ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'Auth\ChangePasswordController@process');
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'notes'], function () {
    Route::get('/', 'NoteController@index');
    Route::get('/{id}', 'NoteController@show');
    Route::post('/', 'NoteController@create');
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'tags'], function () {
    Route::get('/', 'TagController@index');
    Route::post('/', 'TagController@create');
    Route::put('/', 'TagController@update');
    Route::delete('/', 'TagController@remove');
});

Route::group(['middleware' => 'auth:api', 'prefix' => 'positions'], function () {
    Route::post('/', 'PositionController@create');
    Route::put('/', 'PositionController@update');
});