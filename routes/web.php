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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'quarter'], function () {
    Route::get('/', 'QuarterController@index')->name('quarter.index');
    Route::post('/', 'QuarterController@store')->name('quarter.store');

    Route::get('/create', 'QuarterController@create')->name('quarter.create');
    Route::match(['put', 'patch'], '/{quarter}', 'QuarterController@update')->name('quarter.update');

    Route::get('/{quarter}', 'QuarterController@show')->name('quarter.show');
    Route::get('/{quarter}/edit', 'QuarterController@edit')->name('quarter.edit');
    Route::delete('/{quarter}', 'QuarterController@destroy')->name('quarter.destroy');
});
