<?php

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


//Route::get('/blog', 'PagesController@index');  //get all posts
//Route::get('/blog/create', 'PagesController@create'); //show me a form to create a posts
//Route::post('/blog', 'PagesController@store'); //store the created post on database
//Route::get('/blog/{bid}', 'PagesController@show'); //show/dislay me the current post
//Route::get('/blog/{bid}/edit', 'PagesController@edit'); //display a form to edit an  existing post
//Route::patch('/blog/{bid}', 'PagesController@update'); //update the current (existing) blogp ost
//Route::delete('/blog/{bid}', 'PagesController@destroy'); //delete the current blog post


Route::resource('posts','PostsController');
Route::resource('categories','CategoriesController');

Route::get('/', 'PagesController@home');
Route::get('/aboutus', 'PagesController@aboutus');

Route::get('/categories/posts/{id}', 'CategoriesController@fetchPosts')->name('category_posts');
