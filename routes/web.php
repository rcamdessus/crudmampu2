<?php
use Illuminate\Http\Request;
use App\Post;

Route::get('/users', function () {
    //menggunakan query builder https://laravel.com/docs/5.6/queries
    $users_collection_models = App\User::get();
    //menggunakan Model / Eloquent  https://laravel.com/docs/5.6/eloquenth
    $users_single_model = App\User::find(1);

    //https://laravel.com/docs/5.6/helpers#method-dump
    dump("Collection of Models");
    dump($users_collection_models);
    dump("Single Models");
    dump($users_single_model);
    //https://laravel.com/docs/5.6/helpers#method-dd
    dd("finish");
});

// route index
Route::get('/posts', function () {
    // select * from table posts;


    $posts = Post::get();
    //return view dalam folder resources/views/posts/index.blade.php dengan compact kan variable $posts
    return view('posts.index', compact('posts'));
})->name('posts.index'); // name adalah nama untuk route

// route create
Route::get('/posts/create', function () {
    //return view dalam folder resources/views/posts/create.blade.php
    return view('posts.create');
})->name('posts.create'); // name adalah nama untuk route

//route store
Route::post('/posts', function (Request $request) {
    dd($request->all());
    //create new object of class Post
    $post = new Post;
    // belah kiri adalah nama column dia dalam database
    // manakala belah kanan adalah attribute name dalam form
    // $post->title adalah nama column , dan $request->title adalah nama attribute name dalam form didlm create.blade.php
    $post->title = $request->title;
    $post->body  = $request->body;
    $post->save();
    //menggunakan session untuk keluarkan alert flash message
    // flash(key, value);
    //kita set kan session key dan value dia
    session()->flash('success', 'post berjaya dicipta');
    //link documentation : https://laravel.com/docs/5.6/session#introduction

    return redirect()->route('posts.index');
})->name('posts.store');

// route show
Route::get('/posts/{id}', function ($id) {
    //retrieve data daripada database single data
    // code dibawah sama dengan "select * from table posts where id = $id;"
    $post = Post::find($id);
    return view('posts.show', compact('post'));
})->name('posts.show');
