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

Route::get('/', 'ProductController@index')->name('home');

Route::get('/admin', 'admin\ProductController@index')->name('admin.home');
Route::get('/list', 'admin\ProductController@getListProduct')->name('product.list');
Route::get('/add', 'admin\ProductController@getAddProduct')->name('product.add');

Route::group(['prefix' => 'admin', 'namesRoutepace' => 'admin', 'middleware' =>'CheckLogin'], function(){
	Route::get('', 'admin\ProductController@index')->name('admin.home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
