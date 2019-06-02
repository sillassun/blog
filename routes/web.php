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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('article' , 'ArticleController');
Route::get('dedicated-article', 'ArticleController@dedicatedArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
