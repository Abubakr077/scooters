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
Route::resource('fav_ads','FavAdsController');
Route::resource('/{user}/bikes','BikeController');
Route::resource('{bike}/cart','CartController');

Route::get('/profile' ,'HomeController@showProfile');
Route::get('bikes/search', 'BikeController@filter');
Route::get('accessories/search', 'AccessoriesController@filter');
