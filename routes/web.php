<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::resource('post', PostController::class);

Route::get('/', function () {
    return to_route('post.index');
});

Route::get('all-posts', function () {
    $posts = Post::all();
    return view('all-posts', compact('posts'));
})->name('all-posts');
