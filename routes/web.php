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

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/tags/{tag_url}', 'TagController@index')->name('tagShow');

Route::get('/{category_url}', 'CategoryController@index')->name('categoryShow');
Route::get('/{category_url}/{post_url}', 'PostController@index')->name('articleShow');

Route::post('/{category_url}/{post_url}/comments', 'CommentsController@store');



