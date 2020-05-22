<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    //
    public function getListOrder()
    {
    	$dataView['list_order'] = DB::table('orders')->get();
    	return view('admin.order.listorder', $dataView);
    }
    public function getDetailsOrder($id_order)
    {
   	// $bills = DB::table('bills')
     //        ->select('bills.*', 'payment_methods.name as pay')
     //        ->join('payment_methods', 'payment_methods.id','=', 'bills.payment_method_id')
     //        ->where('code', $input['code'])->first();
    	$dataView['order'] = DB::table('orders')->find($id_order);
    	$dataView['details_order'] = DB::table('details_order')
    		->select('details_order.price as price_order', 'details_order.amount as quantity_order', 'product.*')
    		->join('product', 'product.id','=', 'details_order.id_product')
    		->where([
    		['id_order', '=', $id_order],
    	])->get();
    	// dd($dataView);
    	return view('admin.order.detailsorder', $dataView);
    }
}
