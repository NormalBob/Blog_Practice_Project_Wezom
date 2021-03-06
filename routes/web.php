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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'IndexController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('/register', 'RegistrationController@create') -> name('register');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create') -> name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy') -> name('logout');

Route::get('/tags/{tag_url}', 'TagController@index')->name('tagShow');

Route::get('/{category_url}', 'CategoryController@index') -> name('categoryShow');
Route::get('/{category_url}/{post_url}', 'PostController@index') -> name('postShow');
Route::post('/{category_url}/{post_url}/comments', 'CommentsController@store');



