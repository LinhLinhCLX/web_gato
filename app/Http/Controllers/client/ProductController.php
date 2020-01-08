<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
	
    public function index()
    {
    	$dataView['list_product'] = DB::table('product')->get();
    	// dd($dataView);
    	return view('frontend.index', $dataView);
    }
}
