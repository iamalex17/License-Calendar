<?php

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

    Route::get('/',         'Auth\LoginController@index');
    Route::get('register',  'Auth\RegisterController@index');
    Route::get('dashboard', 'Dashboard\DashboardController@index');
    Route::get('profile',   'Dashboard\ProfileController@index');
    Route::get('events',    'Dashboard\EventController@index');
    // Route::get('/settings',  'Dashboard\SettingsController@index');

    Route::post('event/{user}', 'Dashboard\EventController@store');

    Route::put('profile/{user}', 'Dashboard\ProfileController@update');
    Route::put('event/{event}', 'Dashboard\EventController@update');

    Route::delete('profile/{user}', 'Dashboard\ProfileController@destroy');
    Route::delete('event/{event}', 'Dashboard\EventController@destroy');
});
