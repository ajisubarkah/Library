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

Route::get('/', 'DashboardController@index')->name('home');
Route::post('/', 'IndexesController@search')->name('search');

Route::get('books/{id}/tokenizer', 'TokenizerController@index')->name('tokenizer');
Route::get('indexes', 'IndexesController@setAll');
Route::get('indexes/{id}', 'IndexesController@setOnlyBook');
Route::get('bobot', 'IndexesController@bobot');
