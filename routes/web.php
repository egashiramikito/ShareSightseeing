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
//select画面を表示
Route::group(['middleware' => ['auth']], function(){
Route::get('/', 'PostController@index')->middleware('auth');
Route::get('/select','SelectController@select');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/','PostController@index');
Route::get('/home','PostController@index');
});

Auth::routes();