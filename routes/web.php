<?php
use App\Post;

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



// route index
Route::get('/posts', function () {
    //menggunakan session untuk keluarkan alert flash message
    //session()->flash('success', 'Data berjaya dipaparkan');
    //link documentation : https://laravel.com/docs/5.6/session#introduction
    return view('posts.index', compact('posts'));
})->name('posts.index');

// route create
Route::get('/posts/create', function () {
    return view('posts.create');
});

// route show
Route::get('/posts/{id}', function ($id) {
    return view('posts.show');
});
