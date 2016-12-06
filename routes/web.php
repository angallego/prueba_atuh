<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'web'] , function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index');

});

Route::group(['prefix' => 'admin'], function(){
    // Authentication Routes...
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');

    // Password Reset Routes...
    Route::get('password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Admin\Auth\ResetPasswordController@reset');

});
