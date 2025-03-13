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

Route::get('/about', function () {
    return View('aboutme');
});

// Route::view('about', 'aboutme');

Route::get('admin', function () {
    return View('admin.profile');
});

// Route::view('adminprofile', 'admin.profile');

Route::get('contact', function () {
    return view('contactme', ['name' => 'Shruti']);
});

// Route::view('contact', 'contactme', ['name' => 'Shruti']);

// Route::get('contact', function () {
//     return view('contactme', ['name' => 'Shruti', 'roll' => '003']);
// });

// Route::view('contact','contactme',['name'=>'Shruti', 'roll'=>103]);

// Route::get('contact', function () {
//     return view('contactme')->with('name', 'Shruti');
// });
