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

Route::get('/', 'HomeController@showMain');
Route::get('order-info', function () {
    return view('user/order-information');
});
Route::get('home', function () {
    return back();
});
Auth::routes();

Route::resource('/{user}/accessories','AccessoriesController');
Route::resource('/{user}/orders','OrdersController');
Route::resource('{bike}/fav_ads','FavAdsController');
Route::get('{accessory}/fav_accessory','FavAdsController@storeAccessory');
Route::resource('/{user}/bikes','BikeController');
Route::get('/{user}/used', 'BikeController@usedBikes');
Route::get('/{user}/auto_parts', 'AccessoriesController@autoParts')->name('accessories.autoParts');
Route::get('{user}/auto_parts/{accessory} ', 'AccessoriesController@showAutoParts')->name('accessories.autoParts');

Route::resource('{bike}/cart','CartController');
Route::post('{accessory}/accessory/cart','CartController@storeAccessory');

Route::get('/profile' ,'HomeController@showProfile');
Route::get('/profile-setting' ,'HomeController@profileSettings');
Route::post('/profile-update/{user}' ,'HomeController@updateProfile');
Route::get('bikes/search', 'BikeController@filter');
Route::get('accessories/search', 'AccessoriesController@filter');
//Admin routes
Route::get('admin/login', function () {
    return view('admin/login');
});
Route::get('admin/register', function () {
    return view('admin/register');
});
Route::get('admin/home', function () {
    return view('admin/home');
})->middleware('auth');;
Route::get('/admin_bikes', 'BikeController@allBikes')->name('admin_bikes');
Route::get('/admin_bikes/{bike}/edit', 'BikeController@edit');
Route::post('/admin_bikes/{bike}', 'BikeController@update');
Route::get('/admin_accessories', 'AccessoriesController@allAccessories')->name('admin_accessories');
Route::get('/admin_accessories/{accessory}/edit', 'AccessoriesController@edit');
Route::post('/admin_accessories/{accessory}', 'AccessoriesController@update');
