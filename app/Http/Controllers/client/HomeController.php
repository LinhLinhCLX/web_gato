<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Controllers\client\CartController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Query\Builder;
use Darryldecode\Cart\CartCollection;
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
    	// $dataView['list_product'] = Product::all();
        // parent::__construct();
    	$dataView['menu_cate_product'] = Cate_product::all();
    	$dataView['menu_cate_menu'] = DB::table('cate_menu')->orderBy('number_order', 'ASC')->get();
    	$dataView['menu_cate_blog'] = Cate_blog::all();
    	$dataView['menu_slider'] = Slider::all();
        // dd(\CartCollection::get());
        view()->share($dataView);

        // dd($dataView['cart']);

    }
    public function index()
    {
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
