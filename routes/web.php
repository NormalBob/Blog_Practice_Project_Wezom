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

Route::get('/login', function(){
    return view('login');
});

Route::get('/{category_url}', 'CategoryController@category')->name('categoryShow');
Route::get('/{category_url}/{url_title}', 'PostController@post')->name('articleShow');

Route::get('/tags/{tag_url}', 'TagController@tag')->name('tagShow');

Route::get('/about', 'AboutController@about');
Route::get('/contact', 'ContactController@contact');