<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/posts', 'PagesController@posts');

Route::get('/posts/{id}', 'PagesController@post');

Route::get('/pictures', 'PagesController@pictures');

Route::get('/reserve', 'PagesController@reserve');

Route::get('/rooms', 'PagesController@rooms');

Route::get('/admin', 'PagesController@adminNewPost');

Route::get('/admin/newPost', 'PagesController@adminNewPost');

Route::post('/admin/addnew','PagesController@addNewPost');

Route::post('/admin/delete','PagesController@deletePost');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
