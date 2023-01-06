<?php

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
//defining route
//Route::get('/controller', [PostsController::class, 'index']);
//Route::resource('controller', PostsController::class);
/*
    Get
    Route::get('/blog', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/blog/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::get('/blog/{id?}', [PostsController::class, 'show']); // Optional route parameter

    Post
    Route::get('/blog/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/blog', [PostsController::class, 'store'])->name('blog.store');

    PUT & PATCH
    Route::get('/blog/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/blog/{id}', [PostsController::class, 'update'])->name('blog.update');

    Delete
    Route::delete('/blog/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
*/
// Route with multiple methods
// Route::get(['GET', 'POST'], '/', [PostsController::class, 'index']);

// Any HTTP method
// Route::any('/', [PostsController::class, 'index']);

// Return view
//