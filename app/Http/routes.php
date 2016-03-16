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



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::resource('/posts','PostController');

    Route::resource('/bap', 'BapController');

    Route::resource('/user', 'UserController');

    Route::resource('/comments', 'CommentController');

    Route::resource('/contact', 'ContactController');


    Route::get('/', function () {
        return view('welcome');
    });


    Route::resource('/admin', 'AdminController');

    Route::get('/home', 'HomeController@index');



});