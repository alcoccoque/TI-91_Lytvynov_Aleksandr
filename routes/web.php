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

// Core Application Routes

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/login', 'PagesController@login')->name('login');
Route::post('/psignup', 'UsersController@postSignUp')->name('post.signup');
Route::post('/plogin', 'UsersController@postLogIn')->name('post.login');
Route::get('/logout', 'UsersController@getLogOut')->name('logout');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::post('/ppost', 'PostsController@postPost')->name('post.post');

// Admin Routes

Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');
Route::get('/admin/users', 'AdminController@users')->middleware('is_admin')->name('admin.users');
Route::get('/admin/users/delete/{id}', 'AdminController@deleteUser')->middleware('is_admin')->name('admin.users.delete');
Route::get('/admin/users/promote/{id}', 'AdminController@promoteUser')->middleware('is_admin')->name('admin.users.promote');
Route::get('/admin/users/demote/{id}', 'AdminController@demoteUser')->middleware('is_admin')->name('admin.users.demote');
Route::get('/admin/createcity', 'AdminController@createCity')->middleware('is_admin')->name('admin.createc');
Route::post('/admin/pcreatecity', 'AdminController@postCreateCity')->name('post.create.city')->middleware('is_admin');
Route::get('/admin/createplace', 'AdminController@createPlace')->middleware('is_admin')->name('admin.createp');
Route::post('/admin/pcreateplace', 'AdminController@postCreatePlace')->name('post.create.place')->middleware('is_admin');

// Explore Routes

Route::get('/cities', 'CitiesController@index')->name('cities');
Route::get('/cities/bypopularity', 'CitiesController@byPopularity')->name('cities.popularity');
Route::get('/cities/{id}', 'CitiesController@show')->name('show.city');
Route::get('/cities/like/{id}', 'CitiesController@like')->name('like.city');
Route::get('/cities/unlike/{id}', 'CitiesController@unlike')->name('unlike.city');
Route::post('/cities/pcomment/{id}', 'CitiesController@postComment')->middleware('auth')->name('cities.post.comment');

// Feedback Route

Route::post('/pfeedback', 'PagesController@postFeedback')->name('post.feedback');

// News room Route

Route::get('/news', 'NewsController@index')->middleware('auth')->name('news.index');
Route::get('/news/science', 'NewsController@science')->middleware('auth')->name('news.science');
Route::get('/news/health', 'NewsController@health')->middleware('auth')->name('news.health');
Route::post('/news/savearticle', 'NewsController@save')->middleware('auth')->name('news.save');
Route::get('/news/delete/{id}', 'PagesController@deleteArticle')->middleware('auth')->name('article.delete');
