<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the U  RIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'HomeController@showList');

Route::auth();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/girls', 'Performer\Girls\GirlsController@showList');
    Route::get('/guys', 'Performer\Guys\GuysController@showList');
    Route::get('/couples', 'Performer\Couples\CouplesController@showList');
    Route::get('/profile', 'Profile\IndexController@index');

});

