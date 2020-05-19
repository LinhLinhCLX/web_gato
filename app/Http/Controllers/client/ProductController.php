<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
	
    public function index()
    {
    	//route client\HomeController@index
    	// $dataView['list_product'] = DB::table('product')->get();
    	// $dataView['list_product_best_sale'] = DB::table('product')->where([
     //   		['active', '=', '1'],
     //   		['count_sale', '>', '10'],
     //   	])->get();
    	// $dataView['list_product_best_view'] = DB::table('product')->where([
     //   		['active', '=', '1'],
     //   		['view', '>', '10'],
     //   	])->get();
    	// $dataView['list_product_sale_price'] = DB::table('product')->where([
     //   		['active', '=', '1'],
     //   		['sale_price', '!=', '0'],
     //   	])->get();
    	// // $dataView['list_product_hot'] = null;
    	// $dataView['list_product_news'] = DB::table('product')->where([
     //   		['active', '=', '1'],
     //   		['news', '=', '1'],
     //   	])->get();
    	// // $dataView['list_product_'] = null;
    	// // $dataView['list_blog_'] = null;
    	// $dataView['list_blog_new'] = DB::table('blog')->where([
     //   		['active', '=', '1'],
     //   		// ['', '=', $slug],
     //   	])->get();
    	// $dataView['list_blog_best_view'] = DB::table('blog')->where([
     //   		['active', '=', '1'],
     //   		['view', '>=', 10],
     //   	])->get();
    	// $dataView['list_blog_hot'] = null;
    	// dd($dataView);
    	return view('frontend.index', $dataView);
    }
    public function getListProduct()
    {
    	echo'getListProduct';
       	$dataView['list_product'] = DB::table('product')->where([
       		['active', '=', '1'],
       	])->paginate(12);
       	$dataView['cate_product'] = null;
    	// dd($dataView);
    	return view('frontend.product.listproduct', $dataView);
    }
    public function getProductDetail($slug)
    {
    	// echo'getProductDetail '.$slug;
    	$dataView['cate_product'] = DB::table('cate_product')->where([
       		['active', '=', '1'],
       		['slug', '=', $slug],
       	])->first();
    	$dataView['product'] = DB::table('product')->where([
       		['active', '=', '1'],
       		['slug', '=', $slug],
       	])->get();
       	$dataView['list_product'] = DB::table('product')->where([
       		['active', '=', '1'],
       		['id_cate_product', '=', $dataView['cate_product']->id],
       	])->get();
    	// dd($dataView);
    	return view('frontend.product.detailproduct', $dataView);
    }
    public function getListCategoryProduct($slug)
    {
    	// echo'getListCategoryProduct '.$slug;
    	$dataView['cate_product'] = DB::table('cate_product')->where([
       		['active', '=', '1'],
       		['slug', '=', $slug],
       	])->first();
    	$dataView['list_product'] = DB::table('product')->where([
       		['active', '=', '1'],
       		['id_cate_product', '=', $dataView['cate_product']->id],
       	])->paginate(12);
       	// dd($dataView);
    	return view('frontend.product.listproduct',$dataView);
    }
}
