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

Route::get('/', HomeController::class)->name('home');
Route::get('/author/superadmin', function () {
    return view('authors.show');
})->name('authors.show');
Route::get('/archive/april-2022', function () {
    return view('archives.show');
})->name('archives.show');
Route::resource('posts', PostController::class)->only(['show']);
Route::resource('categories', CategoryController::class)->only(['show']);
