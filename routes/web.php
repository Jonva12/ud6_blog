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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'BlogController@index')->name('posts');
Route::post('/posts', 'BlogController@store')->name('posts.store');
Route::get('/posts/create', 'BlogController@create')->name('posts.create');
Route::get('/posts/{id}/edit', 'BlogController@edit')->name('posts.edit');
Route::get('/posts/{id}', 'BlogController@show')->name('posts.show');
Route::put('/posts/{id}', 'BlogController@update')->name('posts.update');
Route::get('/posts/{id}', 'BlogController@destroy')->name('posts.destroy');
