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
    Route::get('/', 'PagesController@home');

    Route::get('/contact', 'PagesController@contact');

    Route::get('/posts', 'PostsController@posts');

    Route::get('/posts/{id}', 'PostsController@post');

    Route::get('/pictures', 'PagesController@pictures');

    Route::get('/reserve', 'PagesController@reserve');

    Route::get('/rooms', 'PagesController@rooms');

    Route::get('/admin', 'PostsController@adminNewPost');

    Route::get('/admin/newPost', 'PostsController@adminNewPost');

    Route::post('/admin/addnew','PostsController@addNewPost');

    Route::post('/admin/delete','PostsController@deletePost');
});
