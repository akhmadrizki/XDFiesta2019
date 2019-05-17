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

Route::resource('lomba','LombaController');
Route::resource('syarat','SyaratController');
Route::post('lomba/update','LombaController@update');
Route::post('syarat/update','SyaratController@update');
Route::get('/', function () {
    return view('client.pages.index', [
    	'navActive' => 'home'
    ]);
});

Route::get('/xd-profile', function () {
	return view('client.pages.xd-profile', [
		'navActive' => 'profile'
	]);
});

Route::get('/xd-events', function () {
	return view('client.pages.xd-events', [
		'navActive' => 'events'
	]);
});

Route::get('/xd-events/{events}', function ($events) {
	return view('client.pages.xd-events.' . $events, [
		'navActive' => 'events',
		'subnavActive' => $events
	]);
});

Route::get('/xd-gallery', function () {
	return view('client.pages.xd-gallery', [
		'navActive' => 'gallery'
	]);
});

// Admin Routes
Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
