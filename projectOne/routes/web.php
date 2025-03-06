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
    return 'Home Page';
});

Route::get('/about', function () {
    return 'About Page';
});

Route::get('/contact', function () {
    return 'Contact Page';
});

Route::get('/service', function () {
    return 'Service Page';
});

Route::get('/user/{id}', function ($id) {
    return $id;
});

Route::get('/postid/{post_id}/commentid/{comment_id}', function ($post_id, $comment_id) {
    return 'Post ID:' . $post_id . 'Comment ID:' . $comment_id;
});
