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

Route::get('/', 'HomeController@index')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// highlights がリクエストされたら、HighlightsControllerにつなぐ
Route::get('/highlights', 'HighlightsController@index')->name('highlight');
Route::get('/highlights/{highlight}', 'HighlightsController@show');
//lasrs コントローラー
Route::get('/lasers', 'LasersController@index')->name('laser');
Route::get('/lasers/{laser}', 'LasersController@show');
//charges コントローラー
Route::get('/charges', 'ChargesController@index')->name('charge');
Route::get('/charges/{charge}', 'ChargesController@show');

// Route::get('/teste' 'HighlightsController@index')->name(test)