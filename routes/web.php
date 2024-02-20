<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', HomeController::class'index');
Route::resource('/home', HomeController::class);
Route::get('/home/detail/{id}', [HomeController::class, 'detail'])->name('home.detail');
Route::resource('/category', CategoryController::class);
Route::get('/category/list/{id}', [CategoryController::class, 'list'])->name('category.list');
// Route::get('/home/detail/{id}', HomeController::class, 'index');

Route::resource('/post', PostController::class);
