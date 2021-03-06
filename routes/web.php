<?php

// route index
Route::get('/posts', 'PostController@index')->name('posts.index'); // name adalah nama untuk route;
// route create
Route::get('/posts/create', 'PostController@create')->name('posts.create'); // name adalah nama untuk route
//route store
Route::post('/posts', 'PostController@store')->name('posts.store');
// route show
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');
// route edit
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
// route update
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
// route delete
Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');
// delete data daripada database
