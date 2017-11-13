<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['uses' => 'PostController@index'])->name('home');
Route::get('post/create', 
        ['middleware' => 'auth',
         'uses' => 'PostController@create'
            ]);
Route::get('post/{post}',['uses' => 'PostController@show']);

Route::post('post',['uses' => 'PostController@store']);
Route::post('comment',['uses' => 'CommentController@stroe']);

Route::auth();
//Route::get('/home', 'HomeController@index');
