<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'categoriesIndex']);

Route::get('/posts', [App\Http\Controllers\PostController::class, 'postsIndex']);

                        // posts/show/15
Route::get('/posts/show/{id}', [App\Http\Controllers\PostController::class, 'postsShow']);

Route::get('/authors', [App\Http\Controllers\AuthorController::class, 'authorsIndex']);