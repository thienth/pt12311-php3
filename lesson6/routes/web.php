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

Route::get('/', "Client\HomeController@index")->name('homepage');
Route::get('post/remove/{id}', "Client\HomeController@removePost")->name('post.remove');

Route::get('post/add', "Client\HomeController@add")->name('post.add');

