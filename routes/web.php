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
///highlights/{highlight}のPOSTアクセスを受け付けられるようにします。
Route::post('/highlights/{highlight}', 'HighlightsController@store');
//lasrs コントローラー
Route::get('/lasers', 'LasersController@index')->name('laser');
Route::get('/lasers/{laser}', 'LasersController@show');
// PUTアクセスを受け付けられるようにします。
Route::put('/lasers/{laser}', 'LasersController@update');
//charges コントローラー
Route::get('/charges', 'ChargesController@index')->name('charge');
Route::get('/charges/{charge}', 'ChargesController@show');
// PUTアクセスを受け付けられるようにします。
Route::put('/charges/{charge}', 'ChargesController@update');

// tuning
Route::post('/tuning/store', 'TuningsController@store');
Route::get('/tunings', 'TuningsController@index')->name('tuning');
// Route::get('/tunings/{tuning}/edit', 'TuningsController@edit');
// Route::put('/tunings/{tuning}', 'TuningsController@update');
//折れ線グラフを作ってます。
Route::get('/tunings/create', 'TuningsController@create');
Route::get('/chart/index', 'TuningsController@chart');
