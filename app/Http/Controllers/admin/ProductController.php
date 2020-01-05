<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
    public function getListProduct()
    {
        $dataView['list_product'] = DB::table('product')->get();
        // dd($dataView);
    	return view('admin.product.listproduct', $dataView);
    }
    public function getAddProduct()
    {
        $dataView['list_cate_product'] = DB::table('cate_product')->get();
        dd($dataView);
    	return view('admin.product.addproduct');
    }
    public function postAddProduct()
    {
        echo "Đây là phương thức postAddProduct";
    }
    public function getEditProduct()
    {
        echo "Đây là phương thức getEditProduct";
    }
    public function postEditProduct()
    {
        echo "Đây là phương thức postEditProduct";
    }
    public function getDeleteProduct()
    {
        echo "Đây là phương thức getDeleteProduct";
    }
}
