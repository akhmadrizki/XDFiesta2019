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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
