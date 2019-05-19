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

// Login
Route::get('/masuk', 'Auth\LoginController@index')->name('masuk');

// Authentification Routes
Route::get('/login', function(){
	return redirect()-> to('masuk');
})->name('login');
Route::post('/login', 'Auth\LoginController@login')-> name('login');
Route::post('/logout', 'Auth\LoginController@logout')-> name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => 'auth'],function(){
// Admin Routes
	Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('admin');
	Route::get('/dashboard/list', 'Dashboard\DashboardController@list');
	Route::resource('/dashboard/lomba','Content\LombaController');
	Route::resource('/dashboard/syarat','Content\SyaratController');
	Route::post('/dashboard/lomba/update','Content\LombaController@update');
	Route::post('/dashboard/syarat/update','Content\SyaratController@update');
	// Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');