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
    	$viewData['list_product'] = DB::table('product')->get();
    	$viewData['list_cate_product'] = Cate_product::all();
    	$viewData['list_cate_menu'] = Cate_menu::all();
    	$viewData['list_cate_blog'] = Cate_blog::all();
    	$viewData['list_slider'] = Slider::all();
    	// dd($viewData);

    	return view('frontend.index', $viewData);
    }
}
