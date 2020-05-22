<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;

class CartController extends HomeController
{
    public function __construct()
    {
    	parent::__construct();
    	// $dataView['cart'] = \Cart::getContent();
    	// view()->share('carts', \Cart::getContent());
    	// dd(\Cart::getContent());
    	// dd(\Cart::getContent());
    }
    public function getAddToCart(Request $request,$id_product)
    {
    	// dd(Input::get('quantity'));
    	$product = DB::table('product')->find($id_product);
  		if($product->sale_price == 0)
  			$price = $product->price;
  		else
  			$price = $product->sale_price;

    	if(Input::get('quantity') == null)
    	{
	    	// dd(Input::get('quantity'));
			\Cart::add(array(
	            array(
	                'id' => $product->id,
	                'name' => $product->name,
	                'price' => $price,
	                'quantity' => 1,
	                'attributes' => $product
	            ),
	        ));
    	}
    	else{
    		// dd(Input::get('quantity'));
	    	\Cart::add(array(
	            array(
	                'id' => $product->id,
	                'name' => $product->name,
	                'price' => $price,
	                'quantity' => Input::get('quantity'),
	                'attributes' => $product
	            ),
	        ));
    	}
    	// $cartCollection = \Cart::getContent();
    	// dd($cartCollection);
    	// view()->share('cart', \Cart::getContent());
        $html= '<div class="alert alert-success">Thêm Vào giỏ hàng thành công!</div>';
        echo $html;
		return redirect()->back()->with('thongbao', 'Thêm vào giỏ hàng thành công');
    }

    public function getUpdateCart(Request $request, $id_product)
    {
    	$input=$request->all();
        //        dd($input['quantity']);
        \Cart::update($input['id'], array(
            'quantity' => $input['quantity'], // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
        ));
        $cart = \Cart::getContent();
        $tong=0;
        foreach ($cart as $value){
            $tong += $value->quantity*$value->price;
        }
        echo number_format($tong).' VNĐ';
    }
    public function getDeleteCart($id_product){
        \Cart::remove($id_product);

        return redirect()->back();
    }
    public function getDetailsCart()
    {
    	// echo 'getDetailsCart';
    	return view('frontend.cart.detailscart');
    }
    public function getCheckOut()
    {
    	// echo 'getCheckOut';
    	return view('frontend.cart.checkout');
    }
    
    public function postCheckOut(Request $request)
    {
    	// echo 'postCheckOut';
    	$this->validate($request, [
            'name' =>'required|min:3',
            'email' =>'required|min:3',
            'address' =>'required|min:3',
            // 'image' =>'required|min:3',
            'phone' =>'required|numeric',
            'content' =>'required',
        ],[
            'name.required' => 'Họ tên khách hàng không được bỏ trống',
            'name.min' => 'Tên khách hàng dưới 3 ký tự',
            'email.required' => 'Email khách hàng không được bỏ trống',
            'email.min' => 'Email khách hàng dưới 3 ký tự',
            'address.required' => 'Địa chỉ khác hàng không được bỏ trống',
            'address.min' => 'Địa chỉ khác hàng dưới 3 ký tự',
            // 'image.required' => 'Chọn Ảnh Bài viết',
            // 'image.min' => 'Ảnh Bài viết không hợp lệ',
            'phone.required' => 'Nhập số điện thoại khách hàng',
            'content.required' => 'Nội dung không được bỏ trống',
        ]);
    	$dataView['carts'] = $carts = \Cart::getContent();
        $dataView['totalPrice'] = $totalPrice=0;
        foreach ($carts as $cart)
        {
            $totalPrice = $dataView['totalPrice'] += $cart->quantity * $cart->price;
        }
        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=> $request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'content'=>$request->content,
            'created_at'=> now(),
        ]);
        $user = DB::table('users')->where([
        	['name', '=', $request->name],
        	['phone', '=', $request->phone],
    	])->first();
        DB::table('orders')->insert([
            'id_user' => $user->id,
            'sub_total' => $dataView['totalPrice'],
            'sub_total_pay' => $dataView['totalPrice'],
            'title_cake' => $request->content,
            'created_at'=> now(),
        ]);
        $order_user = DB::table('orders')->where([
        	['id_user', '=', $user->id],
        	['sub_total', '=', $totalPrice],
    	])->first(); 
        foreach ($carts as $cart)
        {
        	$totalItem = 0;
        	$totalItem =$cart->quantity * $cart->price;
            // $product = DB::table('product')->find($cart->id);
            DB::table('details_order')->insert([
                'id_product' => $cart->id,
                'id_order' => $order_user->id,
                'price' => $totalItem,
                'amount' => $cart->quantity,
                'price' => $totalItem,
            ]);
        }

        \Cart::clear();
    	return redirect()->route('home')->with('thongbao', 'Đặt hàng thành công');
    }
}
