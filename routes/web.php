<?php

use App\Http\Controllers\HomeController;
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
Route::get('/post/detail', function () {
    return view('posts.show');
})->name('posts.show');
Route::get('/category/article', function () {
    return view('categories.show');
})->name('categories.show');
Route::get('/author/superadmin', function () {
    return view('authors.show');
})->name('authors.show');
Route::get('/archive/april-2022', function () {
    return view('archives.show');
})->name('archives.show');
