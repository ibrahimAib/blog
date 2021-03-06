<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
// Home..............................
Route::get('/', [PostController::class, 'index']);
// ...........................................


Route::resource('posts', PostController::class);
Route::resource('comments', CommentController::class);
Route::post('/post/{post}/comments', [CommentController::class, 'store']);
