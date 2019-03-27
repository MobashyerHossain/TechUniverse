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

Route::get('/', 'OtherControllers\PageController@index')->name('index');
Route::post('/login', 'MultiAuthControllers\LoginController@login')->name('login.submit');

//Consumer Routes
Route::prefix('consumer')->group(function(){
  Route::get('/home', 'MultiAuthControllers\ConsumerControllers\ConsumerController@index')->name('consumer.home');
  Route::get('/profile', 'MultiAuthControllers\ConsumerControllers\ConsumerController@profile')->name('consumer.profile');
  Route::post('/profile/update/{id}', 'MultiAuthControllers\ConsumerControllers\ConsumerController@update')->name('consumer.profile.edit');

  //Auth Routes
    //login
  Route::get('/', 'MultiAuthControllers\ConsumerControllers\ConsumerLoginController@show')->name('consumer.login');
  Route::post('/', 'MultiAuthControllers\ConsumerControllers\ConsumerLoginController@login')->name('consumer.login.submit');
  Route::get('/logout', 'MultiAuthControllers\ConsumerControllers\ConsumerLoginController@consumerLogout')->name('consumer.logout');
    //register
  Route::get('/register', 'MultiAuthControllers\ConsumerControllers\ConsumerRegisterController@show')->name('consumer.register');
  Route::post('/register', 'MultiAuthControllers\ConsumerControllers\ConsumerRegisterController@register')->name('consumer.register.submit');
    //password reset
  Route::post('/password/email', 'MultiAuthControllers\ConsumerControllers\ConsumerForgotPasswordController@sendResetLinkEmail')->name('consumer.password.email');
  Route::get('/password/reset', 'MultiAuthControllers\ConsumerControllers\ConsumerForgotPasswordController@showLinkRequestForm')->name('consumer.password.request');
  Route::post('/password/reset', 'MultiAuthControllers\ConsumerControllers\ConsumerResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'MultiAuthControllers\ConsumerControllers\ConsumerResetPasswordController@showResetForm')->name('consumer.password.reset');
    //verification
  Route::get('/verification/{id}', 'MultiAuthControllers\ConsumerControllers\ConsumerController@verifyAccount')->name('consumer.verify');
});

//Admin Routes
Route::prefix('admin')->group(function(){
  Route::get('/dashboard', 'MultiAuthControllers\AdminControllers\AdminController@index')->name('admin.dashboard')->middleware('auth:admin');
  Route::get('/profile', 'MultiAuthControllers\AdminControllers\AdminController@profile')->name('admin.profile')->middleware('auth:admin');
  Route::post('/profile/update/{id}', 'MultiAuthControllers\AdminControllers\AdminController@update')->name('admin.profile.edit');

  //Auth Routes
    //login
  Route::get('/', 'MultiAuthControllers\AdminControllers\AdminLoginController@show')->name('admin.login');
  Route::post('/', 'MultiAuthControllers\AdminControllers\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/logout', 'MultiAuthControllers\AdminControllers\AdminLoginController@adminLogout')->name('admin.logout');
    //password reset
  Route::post('/password/email', 'MultiAuthControllers\AdminControllers\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email')->middleware('auth:admin');
  Route::get('/password/reset', 'MultiAuthControllers\AdminControllers\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request')->middleware('auth:admin');
  Route::post('/password/reset', 'MultiAuthControllers\AdminControllers\AdminResetPasswordController@reset')->middleware('auth:admin');
  Route::get('/password/reset/{token}', 'MultiAuthControllers\AdminControllers\AdminResetPasswordController@showResetForm')->name('admin.password.reset')->middleware('auth:admin');
    //verification
  Route::get('/verify', 'MultiAuthControllers\AdminControllers\AdminController@verifyAccount')->name('admin.verify')->middleware('auth:admin');

  //views

});

//Resource Routes
Route::resource('images', 'ModelControllers\ImageController');
Route::resource('addresses', 'ModelControllers\AddressController');
Route::resource('phonenumbers', 'ModelControllers\PhoneNumberController');
Route::resource('adminroles', 'ModelControllers\AdminRoleController');
Route::resource('categories', 'ModelControllers\CategoryController');
Route::resource('brands', 'ModelControllers\BrandController');
Route::resource('series', 'ModelControllers\SeriesController');
Route::resource('products', 'ModelControllers\ProductController');
Route::resource('cartitems', 'ModelControllers\CartItemController');
Route::resource('invoices', 'ModelControllers\InvoiceController');
Route::resource('productviews', 'ModelControllers\ProductViewController');
Route::resource('roles', 'ModelControllers\RoleController');
Route::resource('specifications', 'ModelControllers\SpecificationController');
Route::resource('wishlists', 'ModelControllers\WishListController');

//Other
Route::post('\images\propic', 'ModelControllers\ImageController@storeProfilePicture')->name('store.propic');
Route::post('\payment\checkout', 'ModelControllers\ProductController@checkOut')->name('payment.checkout');
