<?php

use App\Http\Controllers\ArrayContorller;
use App\Http\Controllers\ClientContorller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductContorller;
use App\Http\Controllers\StringContorller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/home_/{name?}', [HomeController::class,'index_'])->name('home_');

Route::get('/users_', function () {
    return view('user');
});

Route::get('/users/{name?}', function ($name=null) {
    // return 'welcome' . ' '. $name;
     $name = "wllmme";
    $age = "13";
    return view("user", compact("name","age"));

});
Route::get('/test1',function(){
    $name = "wllmme";
    // return view('test_1', ['name'=> $name]);
    // return view('test_1', ['name'=>'<br>test</br>']);
    return view('test_1', ['name'=> '<script>alert("1")</script>']);
});


Route::get('/',[ProductContorller::class,'index'])->name('product.index');

// Route::get('/posts',[ClientContorller::class,'getAllPost'])->name('posts.getallpost');
// Route::get('/posts/{id}',[ClientContorller::class,'getPostById'])->name('posts.getpostbyid');
// Route::get('/update-post',[ClientContorller::class,'updatePost'])->name('posts.update');
// Route::get('/delete-post/{id}',[ClientContorller::class,'deletePost'])->name('post.delete');


Route::get('/string',[StringContorller::class,'index'])->name('string.index');
Route::get('/array',[ArrayContorller::class,'index'])->name('array.index');

Route::get('/user',[UserController::class,'index']);
// Route::get('/users/{name}',[UserController::class,'show']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');


Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/store',[SessionController::class,'storeSession'])->name('session.store');
Route::get('/session/delete',[SessionController::class,'deleteSession'])->name('session.delete');



Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');
Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');
Route::post('/add-submit',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getbyid');
Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');
Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');


Route::get('/inner-join',[PostController::class,'innerJoinClause'])->name('post.innerjoin');

Route::get('/all-posts',[PostController::class,'getAllPostsUsingModel'])->name('post.allmodel');



