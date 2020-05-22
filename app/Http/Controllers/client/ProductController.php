<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends HomeController
{
    public function __construct()
    {

        parent::__construct();

    }
    public function index()
    {
    	return redirect()->route('home');
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
    public function getProductDetail($slug, Request $request)
    {
    	// dd($request->slug);
    	if(!$request->session()->has($request->slug))
        {
            DB::table('product')->where('slug',$request->slug)->increment('count_view',1);
        }
    	// echo'getProductDetail '.$slug;
    	$dataView['cate_product'] = DB::table('cate_product')->where([
       		['active', '=', '1'],
       		['slug', '=', $slug],
       	])->first();
    	$dataView['product'] = DB::table('product')->where([
       		['active', '=', '1'],
       		['slug', '=', $slug],
       	])->first();
       	$dataView['list_product'] = DB::table('product')->where([
       		['active', '=', '1'],
       		['id_cate_product', '=', $dataView['product']->id_cate_product],
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
