<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Query\Builder;
use App\Product;
use App\Cate_product;
use App\Cate_blog;
use App\Cate_menu;
use App\Blog;
use App\Slider;

class HomeController extends Controller
{
    public function __construct()
    {
    	$viewData['list_product'] = Product::all();
    	$viewData['list_cate_product'] = Cate_product::all();
    	$viewData['list_cate_menu'] = Cate_menu::all();
    	$viewData['list_cate_blog'] = Cate_blog::all();
    	$viewData['list_slider'] = Slider::all();

    	View::Share($viewData);

    }
    public function index()
    {
    	// $viewData['list_product'] = DB::table('product')->get();
    	// $viewData['list_cate_product'] = Cate_product::all();
    	// $viewData['list_cate_menu'] = Cate_menu::all();
    	// $viewData['list_cate_blog'] = Cate_blog::all();
    	// $viewData['list_slider'] = Slider::all();
    	// dd($viewData);
        $dataView['list_product'] = DB::table('product')->get();
        $dataView['list_product_best_sale'] = DB::table('product')->where([
            ['active', '=', '1'],
        ])->orderBy('count_sale', 'DESC')->get();
        $dataView['list_product_best_view'] = DB::table('product')->where([
            ['active', '=', '1'],
        ])->orderBy('count_view', 'DESC')->get();
        $dataView['list_product_sale_price'] = DB::table('product')->where([
            ['active', '=', '1'],
            ['sale_price', '!=', '0'],
        ])->get();
        // $dataView['list_product_hot'] = null;
        $dataView['list_product_news'] = DB::table('product')->where([
            ['active', '=', '1'],
            ['news', '=', '1'],
        ])->get();
        $dataView['list_product_cate1'] = DB::table('product')->where([
            ['active', '=', '1'],
            ['id_cate_product', '=', '1'],
        ])->get();
        $dataView['list_product_cate2'] = DB::table('product')->where([
            ['active', '=', '1'],
            ['id_cate_product', '=', '2'],
        ])->get();
        // $dataView['list_product_'] = null;
        // $dataView['list_blog_'] = null;
        $dataView['list_blog_new'] = DB::table('blog')->where([
            ['active', '=', '1'],
            // ['', '=', $slug],
        ])->get();
        $dataView['list_blog_best_view'] = DB::table('blog')->where([
            ['active', '=', '1'],
            // ['count_view', '>=', 10],
        ])->orderBy('count_view', 'DESC')->paginate(4);
        // $dataView['list_blog_hot'] = null;
        // dd($dataView);
    	return view('frontend.index', $dataView);
    }
}
