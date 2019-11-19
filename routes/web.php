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

Route::get('tweet', 'TweetController@index');

Route::get('tweet/{id}/show', 'TweetController@show');

Route::get('tweet/add', 'TweetController@add');
Route::post('tweet/add', 'TweetController@store');

Route::get('tweet/{id}/edit', 'TweetController@edit');
Route::post('tweet/edit', 'TweetController@update');

Route::get('tweet/{id}/delete', 'TweetController@delete');
Route::post('tweet/delete', 'TweetController@remove');

Route::post('comment/create', 'CommentController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
