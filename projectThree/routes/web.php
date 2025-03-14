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


Route::get('about', function () {
    return view('myabout');
});

Route::get('user/{u_id}', function ($id) {
    return view('myuser', ['id' => $id]);
});

Route::get('post/{post_id}/comment/{comment_id}', function ($post_id, $comment_id) {
    return view('mypost', ['postid' => $post_id, 'commentid' => $comment_id]);
});

Route::get('student/{name?}', function ($name = null) {
    return view('mystudent', ['name' => $name]);
});

// Route::get('student/{name?}', function ($name = 'Shruti') {
//     return view('mystudent', ['name' => $name]);
// });

Route::get('product/{p_name}', function ($name) {
    return view('myproduct', ['name' => $name]);
})->where('p_name', '[A-Za-z]+');

Route::get('manager/{id}/{name}', function ($id, $name) {
    return view('mymanager', ['id' => $id, 'name' => $name]);
})->whereNumber(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('employee/{id}/{name}',function($id,$name){
    return view('myemployee',['id'=>$id,'name'=>$name]);
})->whereNumber('id')->whereAlpha('name');