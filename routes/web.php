<?php

use Illuminate\Support\Facades\Route;

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
})->name('main');

Route::get('/account', function () {
    return view('personal-area');
})->name('personal-area');

Route::get('/orders', function () {
    return view('personal-area-orders');
})->name('personal-area-orders');

Route::get('/products','ProductsController@index')->name('products');

Route::get('/product/{id}','ProductsController@getProduct')->name('product/{id}');

Route::get('/artists','ArtistsController@index')->name('artists');

Route::get('/artist/{id}','ArtistsController@getArtist')->name('artist/{id}');

Route::get('/shopping-bag', 'ShoppingBagController@getShoppingCart')->name('shopping-bag');

Route::get('/add-to-cart/{id}','ShoppingBagController@getAddToCart')->name('add-to-cart');

Route::get('/reducebyone{id}','ShoppingBagController@getReduceByOne')->name('reducebyone');

Route::get('/plusbyone{id}','ShoppingBagController@getPlusByOne')->name('plusbyone');

Route::get('/removeall{id}','ShoppingBagController@getRemoveAll')->name('RemoveAll');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
