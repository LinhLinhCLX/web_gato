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

Route::get('/', 'client\HomeController@index')->name('home');

Route::get('/admin', 'admin\ProductController@index')->name('admin.home');


Route::group(['prefix' => 'admin', 'namesRoutepace' => 'admin', 'middleware' =>'CheckLogin'], function(){
	Route::get('', 'admin\ProductController@index')->name('admin.home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route backend
Route::prefix('admin-check')->group(function(){
	Route::get('/', 'HomeController@index')->name('dashboard');

	Route::get('/list', 'admin\ProductController@getListProduct')->name('product.list');
	Route::get('/add', 'admin\ProductController@getAddProduct')->name('product.add');
	Route::get('edit', 'admin\ProductController@getEditProduct')->name('product.edit');
	Route::post('/add', 'admin\ProductController@postAddProduct')->name('product.add.post');
	Route::post('edit', 'admin\ProductController@postEditProduct')->name('product.edit.post');
	Route::get('delete', 'admin\ProductController@getDeleteProduct')->name('product.delete');
});

Route::prefix('product')->group(function(){
	Route::get('/list', 'admin\ProductController@getListProduct')->name('product.list');
	Route::get('/add', 'admin\ProductController@getAddProduct')->name('product.add');
	Route::get('edit', 'admin\ProductController@getEditProduct')->name('product.edit');
	Route::post('/add', 'admin\ProductController@postAddProduct')->name('product.add.post');
	Route::post('edit', 'admin\ProductController@postEditProduct')->name('product.edit.post');
	Route::get('delete', 'admin\ProductController@getDeleteProduct')->name('product.delete');
});
