<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function() {
    return view('user.welcome');
})->where('any', '.*');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Auth::routes([
        'register' => true,
        'reset' => false,
        'verify' => false,
    ]);

    Route::middleware('auth:admin')->group(function() {
        Route::get('home', 'AdminHomeController@index')->name('top');
    }); 
});