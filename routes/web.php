<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PageController@index')->name('top');
Route::get('/about', 'App\Http\Controllers\PageController@about')->name('about');
Route::get('/dialysis', 'App\Http\Controllers\PageController@dialysis')->name('dialysis');
Route::get('/hd', 'App\Http\Controllers\PageController@hd')->name('hd');
Route::get('/privacy', 'App\Http\Controllers\PageController@privacy')->name('privacy');
Route::get('/disclaimer', 'App\Http\Controllers\PageController@disclaimer')->name('disclaimer');
Route::get('/sitemap', 'App\Http\Controllers\PageController@sitemap')->name('sitemap');
Route::get('/pd', 'App\Http\Controllers\PageController@pd')->name('pd');
Route::get('/hd/shunt', 'App\Http\Controllers\PageController@shunt')->name('shunt');
Route::get('/contact', 'App\Http\Controllers\PageController@contact')->name('contact');
Route::post('/contact', 'App\Http\Controllers\PageController@contactStore')->name('contact.store');
