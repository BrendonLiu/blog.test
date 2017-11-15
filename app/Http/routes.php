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

Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', ['uses' => 'PostController@index'])->name('home');
    Route::get('post/create', ['middleware' => 'auth',
        'uses' => 'PostController@create'
    ])->name('post.create');
    Route::get('post/{post}', ['uses' => 'PostController@show'])->name('post.show');

    Route::post('post', ['uses' => 'PostController@store'])->name('post.store');
    Route::post('comment', ['uses' => 'CommentController@stroe'])->name('comment.store');
    
    Route::get('/home', 'HomeController@index');

    Route::get('login', ['uses' => 'Auth\AuthController@showLoginForm'])->name('showLoginForm');
    Route::post('login', ['uses' => 'Auth\AuthController@login'])->name('login');
    Route::get('logout', ['uses' => 'Auth\AuthController@logout'])->name('logout');
    
    //Route::get('register', ['uses' => 'Auth\AuthController@showRegistrationForm'])->name('showRegistrationForm');
    //Route::post('register', ['uses' => 'Auth\AuthController@register'])->name('register');
      
});