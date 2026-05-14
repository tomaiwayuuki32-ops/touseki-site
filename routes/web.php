<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',           [PageController::class, 'index'])->name('top');
Route::get('/about',      [PageController::class, 'about'])->name('about');
Route::get('/dialysis',   [PageController::class, 'dialysis'])->name('dialysis');
Route::get('/hd',         [PageController::class, 'hd'])->name('hd');
Route::get('/hd/shunt',   [PageController::class, 'shunt'])->name('shunt');
Route::get('/hd/artery',  [PageController::class, 'artery'])->name('artery');
Route::get('/pd',         [PageController::class, 'pd'])->name('pd');
Route::get('/privacy',    [PageController::class, 'privacy'])->name('privacy');
Route::get('/disclaimer', [PageController::class, 'disclaimer'])->name('disclaimer');
Route::get('/sitemap',    [PageController::class, 'sitemap'])->name('sitemap');
Route::get('/contact',    [PageController::class, 'contact'])->name('contact');
Route::post('/contact',   [PageController::class, 'contactStore'])->name('contact.store');
