<?php

use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware('checkLang')->prefix('admin')->group(function ()
{
    Route::get('/', 'LayoutController@index')->name('layout.index');
    Route::get('/{locale}/change-language','LayoutController@changeLanguage');
    Route::prefix('tables')->group(function ()
    {
        Route::get('/list', 'TableController@list')->name('tables.list');
        Route::get('/{id}/booking', 'TableController@booking')->name('tables.booking');
        Route::get('/{id}/seated', 'TableController@seated')->name('tables.seated');
        Route::get('/{id}/empty', 'TableController@empty')->name('tables.empty');
        Route::get('/list-booking', 'TableController@showBooking')->name('tables.showBooking');
        Route::get('/list-seated', 'TableController@showSeated')->name('tables.showSeated');
        Route::get('/list-empty', 'TableController@showEmpty')->name('tables.showEmpty');
    });
    Route::resource('tables', 'TableController');

    Route::prefix('guests')->group(function ()
    {
        Route::get('/', 'GuestController@index')->name('guests.index');
        Route::get('/{id}/create', 'GuestController@create')->name('guests.create');
        Route::post('/{id}/store', 'GuestController@store')->name('guests.store');
    });
//    Route::resource('guests', 'GuestController');
});
