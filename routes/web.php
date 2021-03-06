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


Auth::routes();
Route::get('/', 'PagesController@home')->name('home');

Route::get('/home', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/cgu-april', 'PagesController@cgu')->name('cgu-april');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/home', 'HomeController@index')->name('home');
