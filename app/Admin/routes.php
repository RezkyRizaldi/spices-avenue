<?php

use App\Admin\Controllers\AuthorController;
use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\CommentController;
use App\Admin\Controllers\HomeController;
use App\Admin\Controllers\PostController;
use App\Admin\Controllers\ProductController;
use App\Admin\Controllers\TeamController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix').'.',
], function (Router $router) {
    $router->get('/', [HomeController::class, 'index'])->name('home');
    $router->resource('products', ProductController::class);
    $router->resource('teams', TeamController::class);
    $router->resource('posts', PostController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('authors', AuthorController::class);
    $router->resource('comments', CommentController::class);
});
