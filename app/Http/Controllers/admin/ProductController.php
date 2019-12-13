<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
    public function getListProduct()
    {
    	return view('admin.product.listproduct');
    }
    public function getAddProduct()
    {
    	return view('admin.product.addproduct');
    }
}
