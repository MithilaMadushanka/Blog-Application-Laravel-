<?php



Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Post routes
Route::post('/posts/store','PostController@store')->name('posts.store');
Route::get('/posts/{postId}/show','PostController@show')->name('posts.show');
Route::get('/posts/all','HomeController@allPosts')->name('posts.all');
Route::get('/posts/{postId}/edit','PostController@edit')->name('posts.edit');
Route::post('/posts/{postId}/update','PostController@update')->name('posts.update');
Route::get('/posts/{postId}/delete','PostController@delete')->name('posts.delete');

//Admin routes
Route::get('admin/dashboard','DashboardController@index')->middleware('admin')->name('admin.dashboard');

