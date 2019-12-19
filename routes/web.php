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


Auth::routes();


Route::get('/', 'BlogController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', 'postController')->only(['index','create','store','show','edit','update','destroy']);

Route::get('/editor', 'EditorController@index')->name('editor');
Route::get('/admin', 'AdminController@index')->name('admin');