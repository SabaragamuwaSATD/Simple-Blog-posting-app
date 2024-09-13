<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


// NOTE: GET Request ////////////////////////////////////////////////////////////////

Route::get('/', function () {
    //Note: Get all posts from the database
    // $posts = Post::all();
    //Note: Get users posts from the database (Not recommanded)
    // $posts = Post::where('user_id', auth()->id())->get();
    //Note: Get users posts from the database
    if(auth()->check()){
        $posts = auth()->user()->usersPosts()->latest()->get();
        return view('home', ['posts' => $posts]);
    }

    return view('home');

});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/create-post', function () {
    return view('create-post');
});

// NOTE: POST Request ////////////////////////////////////////////////////////////////

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'editPost']);
Route::put('/edit-post/{post}', [PostController::class, 'updatedPost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
