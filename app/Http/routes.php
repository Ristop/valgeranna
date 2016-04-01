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

    // Routes for main pages
    Route::get('/', 'PagesController@home');

    Route::get('/rooms', 'PagesController@rooms');

    Route::get('/pictures', 'PagesController@pictures');

    Route::get('/bar', 'PagesController@bar');

    Route::get('/beach', 'PagesController@beach');

    Route::get('/pastime', 'PagesController@pastime');

    Route::get('/posts', 'PostsController@posts');
    Route::get('/posts/{id}', 'PostsController@post');

    Route::get('/contact', 'PagesController@contact');


    // Routes for admin pages
    Route::get('/admin', 'PostsController@adminPosts');

    Route::get('/admin/posts', 'PostsController@adminPosts');
    Route::post('/admin/posts/new','PostsController@adminAddPost');
    Route::post('/admin/posts/edit/{id}', 'PostsController@adminEditPost');
    Route::post('/admin/posts/delete','PostsController@adminDeletePost');

    // Registration routes...
    Route::get('/admin/register', 'Auth\AuthController@getRegister');
    Route::post('/admin/register', 'Auth\AuthController@postRegister');
    Route::post('/admin/register/user/delete', 'Auth\AuthController@removeUser');
    
    Route::get('/admin/password/reset','PagesController@reset');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']); //jah
    Route::get('/home', 'HomeController@index');
});
