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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'consumer'], function () {
  Route::get('/login', 'MultiAuthControllers\ConsumerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MultiAuthControllers\ConsumerAuth\LoginController@login');
  Route::post('/logout', 'MultiAuthControllers\ConsumerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MultiAuthControllers\ConsumerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MultiAuthControllers\ConsumerAuth\RegisterController@register');

  Route::post('/password/email', 'MultiAuthControllers\ConsumerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MultiAuthControllers\ConsumerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MultiAuthControllers\ConsumerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MultiAuthControllers\ConsumerAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'MultiAuthControllers\AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'MultiAuthControllers\AdminAuth\LoginController@login');
  Route::post('/logout', 'MultiAuthControllers\AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'MultiAuthControllers\AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'MultiAuthControllers\AdminAuth\RegisterController@register');

  Route::post('/password/email', 'MultiAuthControllers\AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'MultiAuthControllers\AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'MultiAuthControllers\AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'MultiAuthControllers\AdminAuth\ResetPasswordController@showResetForm');
});
