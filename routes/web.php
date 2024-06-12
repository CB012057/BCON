<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/About Us', function () {
    return view('About Us');
})->name('About Us');

Route::get('/Product', function () {
    return view('Product');
})->name('Product');

Route::get('/Contact Us', function () {
    return view('Contact Us');
})->name('Contact Us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('Categories', \App\Http\Controllers\CategoryController::class)
->name('index', 'categories');
   // ->middleware(['auth','verified']);

Route::resource('Clients', \App\Http\Controllers\ClientController::class);
// ->middleware(['auth','verified']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});
