<?php

// use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello',  'App\Http\Controllers\HelloController@index');
// Route::get('hello', [HelloController::class, 'index']);
// Route::post('hello', [HelloController::class, 'create']);
// Route::get('world', [HelloController::class, 'world_message']);

route::get('posts', [PostController::class, 'index']);
route::get('posts/create', [PostController::class, 'create']);
route::get('posts/{id}', [PostController::class, 'show']);
