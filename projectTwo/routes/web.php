<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('/about', function(){
    return View('aboutme');
});

// Route::view('about', 'aboutme');

Route::get('admin', function(){
    return View('admin.profile');
});

// Route::view('adminprofile', 'admin.profile');