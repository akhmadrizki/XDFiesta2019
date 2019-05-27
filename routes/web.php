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

// Front end routes
Route::get('/', function () {
    return redirect('/xd-events-and-competitions');
});

Route::get('/xd-profile', function () {
	return view('info.under-construction', [
		'navActive' => 'profile'
	]);
});

Route::get('/xd-events-and-competitions', 'PagesController@index');
// Route::get('/xd-events-and-competitions', function () {
// 	return view('client.pages.xd-events-and-competitions', [
// 		'navActive' => 'events'
// 	]);
// });

Route::get('/xd-events-and-competitions/{events}', 'PagesController@show');

// Route::get('/xd-events-and-competitions/{events}', function ($events) {
// 	return view('client.pages.xd-events.' . $events, [
// 		'navActive' => 'events',
// 		'subnavActive' => $events
// 	]);
// });

Route::get('/xd-events-and-competitions/download/{file}', 'PagesController@download');

Route::get('/response/review', function() {
	return view('info.review');
});

Route::get('/xd-gallery', function () {
	return view('info.under-construction', [
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
	Route::resource('/dashboard/hadiah','Content\HadiahController');
	Route::resource('/dashboard/ketentuan_peserta','Content\KetentuanPesertaController');
	Route::resource('/dashboard/penilaian','Content\PenilaianController');
	Route::resource('/dashboard/kontak','Content\KontakController');
	Route::resource('/dashboard/waktu_tempat','Content\WaktuTempatController');
	Route::post('/dashboard/lomba/update','Content\LombaController@update');
	Route::post('/dashboard/syarat/update','Content\SyaratController@update');
	Route::post('/dashboard/hadiah/update','Content\HadiahController@update');
	Route::post('/dashboard/ketentuan_peserta/update','Content\KetentuanPesertaController@update');
	Route::post('/dashboard/penilaian/update','Content\PenilaianController@update');
	Route::post('/dashboard/waktu_tempat/update','Content\WaktuTempatController@update');
	Route::post('/dashboard/kontak/update','Content\KontakController@update');
	// Route::get('download',function(){
	// 	return Response::download($path_to_file,'name_of_file');
	// });
	// Route::get('download',function(){
	// 	return Response::download($path_to_file,'name_of_file');
	// });
	Route::get('/dashboard/lomba/download/{file}', 'Content\LombaController@download');
	// Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');