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
    // Route for ajax polling request to update news elements in real time.
    Route::get('/news/ajaxpoll', 'PagesController@ajaxNewsRequest');

    // Routes for main pages
    Route::get('/', 'PagesController@home');

    Route::get('/rooms', 'PagesController@rooms');

    Route::get('/pictures', 'PagesController@pictures');

    Route::get('/bar', 'PagesController@bar');

    Route::get('/beach', 'PagesController@beach');

    Route::get('/pastime', 'PagesController@pastime');

    Route::get('/posts', 'PagesController@posts');
    Route::get('/posts/{id}', 'PagesController@post');

    Route::get('/contact', 'PagesController@contact');

    // Routes for admin pages
    Route::get('/admin', 'AdminController@adminPosts');

    Route::get('/admin/posts', 'AdminController@adminPosts');
    Route::post('/admin/posts/new','AdminController@adminAddPost');
    Route::post('/admin/posts/edit/{id}', 'AdminController@adminEditPost');
    Route::post('/admin/posts/delete','AdminController@adminDeletePost');

    //For ajax update
    Route::post('/admin/posts/update', 'AdminController@adminEditPost');

    // Overriding registration routes so user can only register if logged in
    Route::get('/admin/register', 'Auth\AuthController@getRegister');
    Route::post('/admin/register', 'Auth\AuthController@postRegister');
    Route::post('/admin/register/user/delete', 'Auth\AuthController@removeUser');
    
    Route::get('/admin/password/reset','AdminController@reset');

    // Authentication
    Route::auth();
    Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']); //jah
    Route::get('/home','PagesController@back');

    $s = 'social.';
    Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
    Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

    //BankLinkroutes..
    Route::get('/contact','PagesController@bankQuery');
    Route::post('callback/seb','BankController@callback');
    Route::post('cancel/seb','BankController@cancel');

});