<?php

use Illuminate\Support\Facades\Route;






Route::get('/home', 'HomeController@index');
Route::post('/home/save/', 'HomeController@save')->name('home.save');

Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart/{id?}', 'CartController@index')->name('cart.index');
Route::get('/add-to-cart', 'CartController@store')->name('cart.store');
Route::get('/delete-cart/{id?}', 'CartController@deleteCart')->name('cart.delete');
Route::get('/delete-cart-all/{id?}', 'CartController@deleteCartAll')->name('cart.deleteAll');

Route::get('/{search?}', 'LandingPageController@index')->name('landing-page.index');

?>

