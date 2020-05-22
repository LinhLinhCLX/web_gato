<div class="footer">
    <!-- Begin Footer Static Top Area -->
    <div class="footer-static-top">
        <div class="container">
            {{--
            <!-- Begin Footer Shipping Area -->
            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                <div class="row">
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Free Delivery</h2>
                                <p>And free returns. See checkout for delivery dates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Safe Payment</h2>
                                <p>Pay with the world's most popular and secure payment methods.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>Shop with Confidence</h2>
                                <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                    <!-- Begin Li's Shipping Inner Box Area -->
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                        <div class="li-shipping-inner-box">
                            <div class="shipping-icon">
                                <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                            </div>
                            <div class="shipping-text">
                                <h2>24/7 Help Center</h2>
                                <p>Have a question? Call a Specialist or chat online.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Shipping Inner Box Area End Here -->
                </div>
            </div>
            <!-- Footer Shipping Area End Here -->
            --}}
        </div>
    </div>
    <!-- Footer Static Top Area End Here -->
    <!-- Begin Footer Static Middle Area -->
    <div class="footer-static-middle">
        <div class="container">
            <div class="footer-logo-wrap pt-50 pb-35">
                <div class="row">
                    <!-- Begin Footer Logo Area -->
                    <div class="col-lg-3 col-md-4">
                        <div class="footer-logo">
                            <img src="assets/logo_01_03.png" alt="Footer Logo" height="80px" width="80px">
                            {{--<p class="info">
                                Nhóm 3 - Website Bán bánh kem - LPHP1907e.
                            </p>--}}
                        </div>
                        <ul class="des">
                            <li>
                                <span>Địa chỉ: </span>
                                Trung tâm T3H.
                            </li>
                            <li>
                                <span>Liên Hệ: </span>
                                <a href="tel:0398225413">039 822 5413</a>
                            </li>
                            <li>
                                <span>Email: </span>
                                <a href="mailto:1906daolinh@gmail.com">1906daolinh@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Footer Logo Area End Here -->
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Danh mục sản phẩm</h3>
                            <ul>
                                @foreach($menu_cate_product as $item)
                                <li><a href="{{route('client.product.list.cate_product', ['slug'=> $item->slug])}}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Danh mục Bài viết</h3>
                            <ul>
                                @foreach($menu_cate_blog as $item)
                                <li><a href="{{route('client.blog.list.cate_blog', ['slug'=> $item->slug])}}">{{$item->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Block Area End Here -->
                    {{--
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Thông tin</h3>
                            <ul>
                                <li><a href="#">Giao hàng</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Block Area End Here -->
                    --}}
                    <!-- Begin Footer Block Area -->
                    <div class="col-lg-3">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Follow Us</h3>
                            <ul class="social-link">
                                {{--
                                <li class="twitter">
                                    <a href="https://twitter.com/" data-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="rss">
                                    <a href="https://rss.com/" data-toggle="tooltip" target="_blank" title="RSS">
                                        <i class="fa fa-rss"></i>
                                    </a>
                                </li>
                                --}}
                                
                                <li class="google-plus">
                                    <a href="mailto:1906daolinh@gmail.com" data-toggle="tooltip" target="_blank" title="Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/nho.songlinh" data-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="instagram">
                                    <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Begin Footer Newsletter Area -->
                        <div class="footer-newsletter">
                            <h4>Đăng ký nhận tin mới nhất</h4>
                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                               <div id="mc_embed_signup_scroll">
                                  <div id="mc-form" class="mc-form subscribe-form form-group" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Nhập email vào đây ..." />
                                    <button  class="btn" id="mc-submit">Đăng ký</button>
                                  </div>
                               </div>
                            </form>
                        </div>
                        <!-- Footer Newsletter Area End Here -->
                    </div>
                    <!-- Footer Block Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Middle Area End Here -->
    <!-- Begin Footer Static Bottom Area -->
    <div class="footer-static-bottom pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{--
                    <!-- Begin Footer Links Area -->
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Online Shopping</a></li>
                            <li><a href="#">Promotions</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Most Populars</a></li>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Special Products</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Warantee</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Policy Shipping</a></li>
                        </ul>
                    </div>
                    <!-- Footer Links Area End Here -->
                    <!-- Begin Footer Payment Area -->
                    <div class="copyright text-center">
                        <a href="#">
                            <img src="images/payment/1.png" alt="">
                        </a>
                    </div>
                    <!-- Footer Payment Area End Here -->
                    --}}
                    <!-- Begin Copyright Area -->
                    <div class="copyright text-center" style="padding: 0px; margin:10px;">
                        {{--
                        <span><a href="https://www.templatespoint.net" target="_blank">Templates Point</a></span>
                        --}}
                        <span  style="padding: 0px; margin:10px;">
                            <i class="far fa-copyright" aria-hidden="true"></i>
                            <a href="http://tldcake.tk/" target="_blank">Copyright 2019 | by NHOM3: Trường & Linh & Đại - LPHP1907e</a>
                        </span>
                    </div>
                    <!-- Copyright Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Static Bottom Area End Here -->
</div>