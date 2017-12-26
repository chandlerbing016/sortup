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

Route::prefix('ap')->middleware('addp')->group(function() {
	Route::get('/add', 'AddPlaylistController@index')->name('add.playlist');
});

// Route::get('/ap', 'AddPlaylistController@index')->middleware('addp');

Route::prefix('manage')->group(function() {
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');

