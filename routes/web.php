<?php

Route::get('/', 'ProjectController@index')->name('/');
Route::get('/blog/blog-details/{id}', 'ProjectController@blogDetails')->name('blog-details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-blog', 'BlogController@addBlog')->name('add-blog');
Route::post('/new-blog', 'BlogController@newBlog')->name('new-blog');
Route::get('/manage-blog', 'BlogController@manageBlog')->name('manage-blog');
Route::get('/edit-blog/{id}', 'BlogController@editBlog')->name('edit-blog');
Route::post('/update-blog', 'BlogController@updateBlog')->name('update-blog');
Route::get('/delete-blog/{id}', 'BlogController@deleteBlog')->name('delete-blog');

