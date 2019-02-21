<?php

Route::group(['namespace' => 'Consumer'], function() {
    Route::get('/', 'HomeController@index')->name('consumer.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('consumer.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('consumer.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('consumer.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('consumer.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('consumer.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('consumer.password.reset');

});