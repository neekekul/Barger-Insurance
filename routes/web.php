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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/login', 'SessionsController@onCreate');
Route::post('/login', 'SessionsController@makeSession');

Route::get('/register', 'RegistrationController@onCreate');
Route::post('/register', 'RegistrationController@onStore');

Route::get('/quote', 'FeatureController@onCreateQuote');

Route::get('/meet', 'FeatureController@onCreateMeet');

Route::get('/blog', 'FeatureController@onCreateBlog');

Route::get('/browseBlog', 'AccountController@onBrowsePost');
Route::post('/browseBlog', 'AccountController@commentStore');

Route::get('/post', 'AccountController@onCreatePost');
Route::post('/post', 'AccountController@postStore');

Route::get('/logout', 'SessionsController@destroy');
