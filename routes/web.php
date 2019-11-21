<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Front routes
Route::group([], function () {

    Route::get('/', 'PageController@home')->name('home');

});


// Back routes
Route::redirect('panel', '/jasmine');
Route::group(['prefix' => 'jasmine'], function () {
    Voyager::routes();
});
