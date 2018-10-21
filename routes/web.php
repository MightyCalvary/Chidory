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

Route::get('/', 'SoonController@home');
Route::post('/', 'SoonController@subscribe');

Route::name('web.')->prefix('web')->namespace('Web\\V1')->group(function () {
	Route::get('/', 'HomeController@home')->name('home');
	Route::get('/about', 'HomeController@about')->name('about');
	Route::get('/service', 'HomeController@service')->name('service');
	Route::get('/gallery', 'HomeController@gallery')->name('gallery');
	Route::get('/contact', 'HomeController@contact')->name('contact');
});

Route::name('showcase.')->prefix('showcase')->namespace('Web\\V2')->group(function () {
	Route::get('/',			'HomeController@home')->name('home');
	Route::get('/about',	'HomeController@about')->name('about');
	Route::get('/contact',	'HomeController@contact')->name('contact');
	Route::post('/tell',	'HomeController@tell')->name('tell');
	Route::get('/portfolio/{category?}',	'HomeController@portfolio')->name('portfolio');
	Route::get('/story/{id?}',	 			'HomeController@story')->name('story');
});
