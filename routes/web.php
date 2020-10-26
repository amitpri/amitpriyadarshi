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

 
Route::get('/', 'IndexController@index');
Route::get('/show', 'IndexController@show'); 

Route::get('/{blogid}/{blogcategory}', 'IndexController@category'); 


Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'IndexController@profile');
Route::get('/pictures', 'IndexController@pictures');
Route::get('/pictures/{id}/{name}', 'IndexController@picture');
Route::get('/blogs', 'IndexController@blogs');
Route::get('/mywork', 'IndexController@mywork');
Route::get('/contact', 'IndexController@contact');

Route::get('/download/jce_policy-8', 'IndexController@download');