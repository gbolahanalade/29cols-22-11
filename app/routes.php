<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::model('blog','Blog');
Route::model('song','Song');
Route::get('/', 'HomeController@getIndex');


Route::get('songs', 'SongController@index');
Route::get('videos', 'VideoController@index');
Route::get('galleries', 'GalleryController@index');


Route::get('blog/{id}', 'BlogController@index');
Route::get('/blog/{blog}/show', 'BlogController@showBlog');
Route::get('/song/{song}/show', 'SongController@showSong');
Route::get('/song/upload', 'SongController@getNew');
Route::post('/song/create', 'SongController@postCreate');

//Route::get('/song/show/{song}', 'SongController@showSongP');

Route::get('/profile', ['as'=> 'profile', 'uses' =>'ProfileController@getIndex']);
//Route::get('/profile',['as'=> 'profile.single', 'uses' =>'ProfileController@getSingle']);


// Confide routes
Route::get('users/register',['as'=> 'register', 'uses' =>'UsersController@getCreate']);
Route::post('users', 'UsersController@postCreate');
Route::get('users/login', ['as'=>'login', 'uses'=> 'UsersController@getLogin']);
Route::post('users/login', 'UsersController@postLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@getForgotPassword');
Route::post('users/forgot_password', 'UsersController@postForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@getResetPassword');
Route::post('users/reset_password', 'UsersController@postResetPassword');
Route::get('users/logout', ['as' => 'logout', 'uses' => 'UsersController@getLogout']);

Route::get('/upload', 'UploadController@index');


Route::get('users/login/fb', ['as' => 'fblogin', 'uses'=> 'UsersController@fblogin']);
Route::get('users/login/fb/callback', ['as' => 'fbcall', 'uses'=> 'UsersController@fbcall']);
