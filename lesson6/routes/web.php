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

Route::group(['middleware' => 'auth', 'prefix' => 'post'], function() {
    Route::get('remove/{id}', "Client\HomeController@removePost")->name('post.remove');

	Route::get('add', "Client\HomeController@add")
						->middleware(['author.role'])
						->name('post.add');
	Route::get('update/{id}', "Client\HomeController@update")->name('post.update');
	Route::post('save', "Client\HomeController@save")->name('post.save');
});


Route::get('login', 'Auth\LoginController@login')->name('login');
Route::post('login', 'Auth\LoginController@postLogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('send-mail/{msg}', 'Client\HomeController@sendMail');
use Carbon\Carbon;
Route::get('random-token', function() {
    $token = sha1(str_random(40) . uniqid());
    $now = Carbon::now();
    return $now;
});






