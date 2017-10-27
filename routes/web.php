<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'frontController@start')->name('start');

Route::get('/about', 'frontController@about')->name('about');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart','CartController@index')->name('cart');

Route::get('/products','ProductController@index')->name('products');

Route::prefix('admin')->group(function(){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

