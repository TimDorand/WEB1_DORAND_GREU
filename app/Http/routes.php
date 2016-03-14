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

<<<<<<< HEAD
    Route::resource('/posts','PostController'); /*FAUT CHANGER CA*/
=======
    Route::resource('/posts','PostController');
>>>>>>> a04b6141d22018a052b10953050d6b0f38040562

    Route::resource('/bap', 'BapController');


    Route::get('/', function () {
        return view('home');
    });
    Route::resource('/admin', 'AdminController');


    Route::get('/home', 'HomeController@index');

});