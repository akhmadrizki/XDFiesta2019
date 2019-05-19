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

// Route::resource('lomba','LombaController');
// Route::resource('syarat','SyaratController');
// Route::post('lomba/update','LombaController@update');
// Route::post('syarat/update','SyaratController@update');
Route::get('/', function () {
    return redirect('/xd-events-and-competitions');
});

Route::get('/xd-profile', function () {
	return view('info.under-construction', [
		'navActive' => 'profile'
	]);
});

Route::get('/xd-events-and-competitions', function () {
	return view('client.pages.xd-events-and-competitions', [
		'navActive' => 'events'
	]);
});

Route::get('/xd-events-and-competitions/{events}', function ($events) {
	return view('client.pages.xd-events.' . $events, [
		'navActive' => 'events',
		'subnavActive' => $events
	]);
});

Route::get('/xd-gallery', function () {
	return view('info.under-construction', [
		'navActive' => 'gallery'
	]);
});

// Admin Routes
Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('admin');
Route::get('/dashboard/list', 'Dashboard\DashboardController@list');
Route::resource('/dashboard/lomba','Content\LombaController');
Route::resource('/dashboard/syarat','Content\SyaratController');
Route::post('/dashboard/lomba/update','Content\LombaController@update');
Route::post('/dashboard/syarat/update','Content\SyaratController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

