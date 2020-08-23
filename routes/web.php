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
    });
    Route::resource('tables', 'TableController');
});
