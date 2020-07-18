<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/posts', 'Admin\PostsController@index');
Route::get('/posts/{post}', 'Admin\PostsController@show');
Route::post('/posts', 'Admin\PostsController@store');
Route::delete('/posts/{post}', 'Admin\PostsController@destroy');
