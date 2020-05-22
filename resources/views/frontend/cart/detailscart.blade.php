<!-- <h1>Detail product</h1> -->

@extends('frontend.layouts.master')
@section('title')
	Chi tiết giỏ hàng
@endsection
@section('content')

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href="{{route('details.cart')}}">Giỏ hàng </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <form action="#"> -->
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Hủy</th>
                                    <th class="li-product-thumbnail">Ảnh</th>
                                    <th class="cart-product-name">Sản phẩm</th>
                                    <th class="li-product-price">Giá</th>
                                    <th class="li-product-quantity">Số lượng</th>
                                    <th class="li-product-subtotal">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts as $cart)
                                            {{--$cart->attributes->image--}}
                                <tr>
                                    <td class="li-product-remove"><a href="{{route('delete.to.cart', ['id_product' => $cart->id])}}"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail minicart-product-image"><a href="{{route('client.product.detail', ['slug'=>$cart->attributes->slug])}}"><img style="width: 100px; height:auto;" class="minicart-product-image" src="assets/img_product/{{$cart->attributes->image}}" alt="{{$cart->name}}"></a></td>
                                    <td class="li-product-name"><a href="{{route('client.product.detail', ['slug'=>$cart->attributes->slug])}}">{{$cart->name}}</a></td>
                                    <td class="li-product-price"><span class="amount">{{number_format($cart->price)}}</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" name="quantity" value="{{$cart->quantity}}" type="text" onchange="">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount"><?php $total = $cart->quantity*$cart->price;  ?>{{number_format($total)}}</span></td>
                                </tr>
                                @endforeach
                                {{--<tr>
                                    <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="images/product/small-size/6.jpg" alt="Li's Product Image"></a></td>
                                    <td class="li-product-name"><a href="#">Mug Today is a good day</a></td>
                                    <td class="li-product-price"><span class="amount">$71.80</span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">$60.50</span></td>
                                </tr>--}}
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Tổng đơn</h2>
                                <ul>
                                    <li>Tổng cộng: <span>{{number_format($totalPrice)}} VNĐ</span></li>
                                </ul>
                                <a href="{{route('check.out')}}">Check Out</a>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->

@endsection