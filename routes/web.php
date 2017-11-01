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
	$data['hotels'] = \App\Hotel::all();
    return view('welcome', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hotels', 'HomeController@hotel')->name('hotels');
Route::post('hotels', 'HomeController@addhotel')->name('addHotel');
Route::get('hotels/{id}', 'HomeController@viewhotel')->name('viewHotel');
Route::post('comment', 'HomeController@addComment')->name('addComment');
