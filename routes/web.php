<?php

Route::get('/', 'ProjectController@index')->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-blog', 'BlogController@addBlog')->name('add-blog');
Route::post('/new-blog', 'BlogController@newBlog')->name('new-blog');

