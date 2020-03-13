<?php

use App\Post;
use App\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return new \App\Mail\UserVerified();
});

Route::get('/categories/{category}/posts/{post:id}', function (Category $category, Post $post) {
    return $post;
})->name('post.show');

