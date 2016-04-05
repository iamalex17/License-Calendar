<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', [
        'uses' => 'Auth\LoginController@index',
    ]);

    Route::get('/register', [
        'uses' => 'Auth\RegisterController@index',
    ]);

    Route::get('/dashboard', [
        'uses' => 'Dashboard\DashboardController@index',
    ]);

    Route::get('/profile', [
        'uses' => 'Dashboard\ProfileController@index',
    ]);

    Route::post('/update-profile', [
        'uses' => 'Dashboard\ProfileController@store',
    ]);

    Route::get('/settings', [
        'uses' => 'Dashboard\SettingsController@index',
    ]);
});
