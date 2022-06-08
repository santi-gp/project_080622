<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return '<h1>Hello About</h1>';
    //return redirect('/');
});
Route::get('/contact', function(){
    return '<h1>Hello Contact</h1>';
});

Route::get('/post/{id}', [PostController::class, 'index']);

// Route parameters. Example: localhost:8000/post/5
/*Route::get('/post/{id}', function($id){
    return '<h1>Number post: '.$id.'</h1>';
});*/

// Multiple route parameters. Example: localhost:8000/post/10/El tiempo
Route::get('/post/{id}/{title}', function($id,$title){
    return '<h1>Number post: '.$id.'</h1><h2>Title: '.$title.'</h2>';
});

// Optional Parameters
/*Route::get('/user/{name?}', function($name=null){
    return $name;
});*/

Route::get('/user/{name?}', function($name='richi'){
    return $name;
});


