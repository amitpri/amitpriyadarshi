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

Route::get('/profile', 'IndexController@profile');
Route::get('/pictures', 'IndexController@profile');
Route::get('/videos', 'IndexController@profile');
Route::get('/mywork', 'IndexController@profile');
Route::get('/contact', 'IndexController@profile');