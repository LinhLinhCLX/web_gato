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

// Trang chủ
Route::get('/', 'client\HomeController@index')->name('home');

// Bài viết
Route::get('bai-viet', 'client\BlogController@getListBlog')->name('client.blog.list');

Route::get('bai-viet/{slug}', 'client\BlogController@getBlog')->name('client.blog.detail');
Route::get('baiviet/{slug}', 'client\BlogController@getListCategoryBlog')->name('client.blog.list.cate_blog');
// Sản phẩm
Route::get('san-pham', 'client\ProductController@getListProduct')->name('client.product.list');

Route::get('san-pham/{slug}', 'client\ProductController@getProductDetail')->name('client.product.detail');
Route::get('sanpham/{slug}', 'client\ProductController@getListCategoryProduct')->name('client.product.list.cate_product');


Route::group(['prefix' => 'admin', 'namesRoutepace' => 'admin', 'middleware' =>'CheckLogin'], function(){
	Route::get('', 'admin\ProductController@index')->name('admin.home');
});
Auth::routes();
Route::get('/admin', 'admin\ProductController@index')->name('admin.home');
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

Route::prefix('admin_user')->group(function(){
	Route::get('/', 'admin\AdminController@getListAdmin')->name('admin_user.list');
	Route::get('/add', 'admin\AdminController@getAddAdmin')->name('admin_user.add');
	Route::post('/add', 'admin\AdminController@postAddAdmin')->name('admin_user.add.post');
	Route::get('/edit/{id_admin}', 'admin\AdminController@getEditAdmin')->name('admin_user.edit');
	Route::post('/edit/{id_admin}', 'admin\AdminController@postEditAdmin')->name('admin_user.edit.post');
	Route::get('delete/{id_admin}', 'admin\AdminController@getDeleteAdmin')->name('admin_user.delete');
});

Route::prefix('permission')->group(function(){
	Route::get('/', 'admin\PermissionController@getListPermission')->name('permission.list');
	Route::get('/add', 'admin\PermissionController@getAddPermission')->name('permission.add');
	Route::post('/add', 'admin\PermissionController@postAddPermission')->name('permission.add.post');
	Route::get('/edit/{id_permission}', 'admin\PermissionController@getEditPermission')->name('permission.edit');
	Route::post('/edit/{id_permission}', 'admin\PermissionController@postEditPermission')->name('permission.edit.post');
	Route::get('delete/{id_permission}', 'admin\PermissionController@getDeletePermission')->name('permission.delete');
});
Route::prefix('cate_product')->group(function(){
	Route::get('/', 'admin\CategoryProductController@getListCategoryProduct')->name('cate_product.list');
	Route::get('/add', 'admin\CategoryProductController@getAddCategoryProduct')->name('cate_product.add');
	Route::post('/add', 'admin\CategoryProductController@postAddCategoryProduct')->name('cate_product.add.post');
	Route::get('/edit/{id_cate_product}', 'admin\CategoryProductController@getEditCategoryProduct')->name('cate_product.edit');
	Route::post('/edit/{id_cate_product}', 'admin\CategoryProductController@postEditCategoryProduct')->name('cate_product.edit.post');
	Route::get('/delete/{id_cate_product}', 'admin\CategoryProductController@getDeleteCategoryProduct')->name('cate_product.delete');
});
Route::prefix('product')->group(function(){
	Route::get('/', 'admin\ProductController@getListProduct')->name('product.list');
	Route::get('/add', 'admin\ProductController@getAddProduct')->name('product.add');
	Route::get('edit/{id_product}', 'admin\ProductController@getEditProduct')->name('product.edit');
	Route::post('/add', 'admin\ProductController@postAddProduct')->name('product.add.post');
	Route::post('edit/{id_product}', 'admin\ProductController@postEditProduct')->name('product.edit.post');
	Route::get('delete', 'admin\ProductController@getDeleteProduct')->name('product.delete');
});

Route::prefix('blog')->group(function(){
	Route::get('/', 'admin\BlogController@getListBlog')->name('blog.list');
	Route::get('/add', 'admin\BlogController@getAddBlog')->name('blog.add');
	Route::post('/add', 'admin\BlogController@postAddBlog')->name('blog.add.post');
	Route::get('/edit/{id_blog}', 'admin\BlogController@getEditBlog')->name('blog.edit');
	Route::post('/edit/{id_blog}', 'admin\BlogController@postEditBlog')->name('blog.edit.post');
	Route::get('/delete/{id_blog}', 'admin\BlogController@getDeleteBlog')->name('blog.delete');
});
Route::prefix('cate_blog')->group(function(){
	Route::get('/', 'admin\CategoryBlogController@getListCategoryBlog')->name('cate_blog.list');
	Route::get('/add', 'admin\CategoryBlogController@getAddCategoryBlog')->name('cate_blog.add');
	Route::post('/add', 'admin\CategoryBlogController@postAddCategoryBlog')->name('cate_blog.add.post');
	Route::get('/edit/{id_cate_blog}', 'admin\CategoryBlogController@getEditCategoryBlog')->name('cate_blog.edit');
	Route::post('/edit/{id_cate_blog}', 'admin\CategoryBlogController@postEditCategoryBlog')->name('cate_blog.edit.post');
	Route::get('/delete/{id_cate_blog}', 'admin\CategoryBlogController@getDeleteCategoryBlog')->name('cate_blog.delete');
});

Route::prefix('cate_menu')->group(function(){
	Route::get('/', 'admin\CategoryMenuController@getListCategoryMenu')->name('cate_menu.list');
	Route::get('/add', 'admin\CategoryMenuController@getAddCategoryMenu')->name('cate_menu.add');
	Route::post('/add', 'admin\CategoryMenuController@postAddCategoryMenu')->name('cate_menu.add.post');
	Route::get('/edit/{id_cate_menu}', 'admin\CategoryMenuController@getEditCategoryMenu')->name('cate_menu.edit');
	Route::post('/edit/{id_cate_menu}', 'admin\CategoryMenuController@postEditCategoryMenu')->name('cate_menu.edit.post');
	Route::get('/delete/{id_cate_menu}', 'admin\CategoryMenuController@getDeleteCategoryMenu')->name('cate_menu.delete');
});

Route::prefix('order')->group(function(){
	Route::get('/', 'admin\OrderController@getListOrder')->name('order.list');
});

