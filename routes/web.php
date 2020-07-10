<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('user.welcome');
})->where('any', '.*');

Auth::routes();

Route::middleware('auth.admin')->group(function() {
    
});

// Route::get('/home', 'HomeController@index')->name('home');
