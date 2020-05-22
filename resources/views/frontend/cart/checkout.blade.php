@extends('frontend.layouts.master')
@section('title')
	Checkout
@endsection
@section('content')

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href="{{route('check.out')}}">Check Out</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        {{--<div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action="#">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password  <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input value="Login" type="submit">
                                    <label>
                                        <input type="checkbox">
                                         Remember me 
                                    </label>
                                </p>
                                <p class="lost-password"><a href="#">Lost your password?</a></p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                    <!--Accordion Start-->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="#">
                                <p class="checkout-coupon">
                                    <input placeholder="Coupon code" type="text">
                                    <input value="Apply Coupon" type="submit">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>--}}
        <div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach

                </div>

            @endif
         
    </div>
        <div class="row">
        	<form action="{{route('check.out.post')}}" method="post" enctype="multipart/form-data">
        		@csrf
            <div class="col-lg-6 col-12">
                
                    <div class="checkbox-form">
                        <h3>Thông tin thanh toán</h3>
                        <div class="row">
                            {{--<div class="col-md-12">
                            	<div class="country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="nice-select wide">
                                      <option data-display="Bangladesh">Bangladesh</option>
                                      <option value="uk">London</option>
                                      <option value="rou">Romania</option>
                                      <option value="fr">French</option>
                                      <option value="de">Germany</option>
                                      <option value="aus">Australia</option>
                                    </select>
                                </div>
								<div class="col-md-6">
	                                <div class="checkout-form-list">
	                                    <label>First Name <span class="required">*</span></label>
	                                    <input placeholder="" type="text">
	                                </div>
	                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>
                                    <input placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input placeholder="" type="text">
                                </div>
                            </div>
							<div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox-info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class="required">*</span></label>
                                    <input placeholder="password" type="password">
                                </div>
                            </div>

                            --}}
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Họ tên <span class="required">*</span></label>
                                    <input placeholder="Nhập tên khách hàng" name="name" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại  <span class="required">*</span></label>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email</label>
                                    <input placeholder="NHập email" type="text" name="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input placeholder="Nhập địa chỉ" type="text" name="address">
                                </div>
                            </div>
                            <div class="col-md-12">
                            	<label>Nội dung Viết trên bánh</label>
                            	
                                <div class="checkout-form-list">
                                    <textarea name="content"></textarea>
                                </div>
                            </div>
                            
                            
                        </div>
                        {{--<div class="different-address">
                            <div class="ship-different-title">
                                <h3>
                                    <label>Ship to a different address?</label>
                                    <input id="ship-box" type="checkbox">
                                </h3>
                            </div>
                            <div id="ship-box-info" class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="nice-select wide">
                                          <option data-display="Bangladesh">Bangladesh</option>
                                          <option value="uk">London</option>
                                          <option value="rou">Romania</option>
                                          <option value="fr">French</option>
                                          <option value="de">Germany</option>
                                          <option value="aus">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input placeholder="Street address" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Phone  <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="order-notes">
                                <div class="checkout-form-list">
                                    <label>Order Notes</label>
                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Thông tin đơn hàng</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Sản phẩm</th>
                                    <th class="cart-product-total">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach($carts as $cart)
                                <tr class="cart_item">
                                  <td class="cart-product-name"> {{$cart->name}}<strong class="product-quantity">{{$cart->price}} × {{$cart->quantity}}</strong></td>
                                  
                                  <td class="cart-product-total">
                                  	<span class="amount">
										<?php $total = $cart->price * $cart->quantity;?>
                                  		{{number_format($total)}} VNĐ
                                  	</span>
                                  </td>
                                  
                                </tr>
                                @endforeach  
                                {{--<tr class="cart_item">
                                  <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity"> × 1</strong></td>
                                  <td class="cart-product-total"><span class="amount">£165.00</span></td>  
                                </tr>>--}}
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Giá trị đơn hàng</th>
                                    <td><span class="amount">{{number_format($totalPrice)}} VNĐ</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th>Thanh toán</th>
                                    <td><strong><span class="amount">{{number_format($totalPrice)}} VNĐ</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div id="accordion">
                              <div class="card">
                                <div class="card-header" id="#payment-1">
                                  <h5 class="panel-title">
                                    <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Thanh toán sau khi nhận hàng
                                    </a>
                                  </h5>
                                </div>
                              </div>
                            </div>
                            {{--<div id="accordion">
                              <div class="card">
                              	<div class="card">
                                	<div class="card-header" id="#payment-2">
                                  <h5 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Cheque Payment
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header" id="#payment-3">
                                  <h5 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      PayPal
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                  <div class="card-body">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                  </div>
                                </div>
                              </div>--}}
                            </div>
                            <div class="order-button-payment">
                                <!-- <a href="{{route('check.out.post')}}" title="Thanh toán"><input value="Xác nhận thanh toán" type="submit"></a> -->
                                <input value="Xác nhận thanh toán" type="submit">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            </form>
        </div>
    </div>
</div>
<!--Checkout Area End-->
@endsection