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
	return view('index'); 
})->name('index')->middleware('auth');;

//Money
Route::resource('tasks','TaskController');

//People
Route::resource('people','PersonController');

//Places
Route::resource('places','PlaceController');

//Money
Route::resource('money','MoneyController');

//Search
Route::get('globalsearch', 'SearchController@index');
Route::get('globalsearch-autocomplete', 'SearchController@autocomplete');

//Auth
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');

