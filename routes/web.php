<?php

/*
|--------------------------------------------------------------------------
|Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('user','UserController@index');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');





// Authentication Routes...
Route::get('dashboard/login', 'Admin\LoginController@showLoginForm')->name('dashboard/login');
Route::post('dashboard/login', 'Admin\LoginController@login');
Route::post('dashboard/logout', 'Admin\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('dashboard/register', 'Admin\RegisterController@showRegistrationForm')->name('register');
Route::post('dashboard/register', 'Admin\RegisterController@register');

// Password Reset Routes...
Route::get('dashboard/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('dashboard/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('dashboard/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('dashboard/password/reset', 'Admin\ResetPasswordController@reset');