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

Route::group([
    'middleware' => 'api',
], function () {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('signup', 'Auth\AuthController@signup');
    Route::post('logout', 'Auth\AuthController@logout');
    Route::post('refresh', 'Auth\AuthController@refresh');
    Route::post('me', 'Auth\AuthController@me');
    Route::post('sendPasswordResetLink', 'Auth\ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'Auth\ChangePasswordController@process');
});

Route::prefix('notes')->group(function () {
    Route::get('/', 'NoteController@index');
});

Route::prefix('tags')->group(function () {
    Route::get('/', 'TagController@index');
    Route::post('/', 'TagController@create');
    Route::put('/', 'TagController@update');
    Route::delete('/', 'TagController@remove');

});