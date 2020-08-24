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
Route::get('/login-form', 'AuthController@showLogin')->name('auth.showLogin');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::middleware('checkLang')->prefix('admin')->group(function ()
{
    Route::middleware('auth')->get('/', 'LayoutController@index')->name('layout.index');
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
        Route::post('/{id}/add-dish', 'TableController@addDish')->name('tables.addDish');
    });
    Route::resource('tables', 'TableController');

    Route::prefix('guests')->group(function ()
    {
        Route::get('/', 'GuestController@index')->name('guests.index');
        Route::get('/{id}/create', 'GuestController@create')->name('guests.create');
        Route::post('/{id}/store', 'GuestController@store')->name('guests.store');
        Route::get('/{id}/table/{table_id}/destroy', 'GuestController@destroy')->name('guests.destroy');
        Route::get('/{id}/edit', 'GuestController@edit')->name('guests.edit');
        Route::post('/{id}/update', 'GuestController@update')->name('guests.update');
    });

//    Route::resource('guests', 'GuestController');

    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('dishes', 'DishController');
    Route::get('/asdsad','LayoutController@showTable')->name('layout.showTable');
});
