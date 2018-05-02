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

Route::get('/',function(){ return view('welcome');});
// Route::get('/profile',function(){ return view('pages.profile');});
// Route::get('/notifications',function(){ return view('pages.notifications');});
// Route::get('/login',function(){ return view('pages.login');});
// Route::get('/publish',function(){ return view('pages.posts');});
// Route::get('/brows',function(){ return view('pages.brows');});
// // Route::get('/upload',function(){ return view('pages.upload');});

// Route::post('/insertpage','postController@getPosts');
// Route::post('/insertcomment','postController@getcomments');
// Route::get('/about','taskController@show');
// Route::get('/colorpage','taskController@getColorData');
// Route::get('/tagpage','taskController@getTagData');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('companies','CompaniesController');
Route::resource('projects','ProjectsController');
Route::resource('roles','RolesController');
Route::resource('tasks','TasksController');
Route::resource('users','UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
