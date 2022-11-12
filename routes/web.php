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
Route::get('/','SelectController@select');
Route::get('/viewarea','ViewController@viewarea');
Route::get('/viewarea/{area}','ViewController@show');
Route::get('/viewarea/{area}/{prefecture}', 'ViewController@view');

//select画面を表示
Route::group(['middleware' => ['auth']], function(){
//Route::get('/', 'PostController@index');


Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}', 'PostController@show');


Route::get('/area','AreaController@area');
Route::get('/area/{area}', 'AreaController@show');
Route::get('/area/{area}/{prefecture}', 'PostController@create');
});

Route::get('/cloudinary', 'CloudinaryController@cloudinary');  //投稿フォームの表示
Route::post('/cloudinary', 'CloudinaryController@cloudinary_store');  //画像保存処理

Auth::routes();