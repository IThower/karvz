<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

Route::controller(PostController::class)->group(function () {

    Route::get('/', [PostController::class, 'preview'])->name('home');
    Route::get('/home', [PostController::class, 'preview'])->name('home');
    Route::get('/links', [PostController::class, 'links'])->name('links');

    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show');

    // Route::get('/all/posts', [PostController::class, 'all_posts'])->name('blog');
    Route::get('/all/posts', 'all_posts')->name('blog');

    Route::resource('posts', PostController::class);

});


Route::middleware(['auth', 'verified'])->group(function () {

});