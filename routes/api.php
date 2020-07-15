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

// Route::middleware('auth:api')->get('a/posts', function (Request $request) {
// });
// Route::namespace('Admin')->prefix('admin')->group(function () {
//     Route::middleware('auth:admin')->group(function() {
//       Route::post('/posts/create', 'Admin\PostsController@store');
//       Route::get('/posts',  'Admin\PostsController@index');
//     });
// });
// Route::group(['middleware' => 'api'], function() {
//   Route::get('posts', function() {
//     $posts = Post::all()->take(10);
//     return $posts;
//   });
// });
