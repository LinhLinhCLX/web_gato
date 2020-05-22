<!-- Begin Header Area -->
<header>
    
    <!-- Begin Header Top Area -->
    {{--<div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Begin Header Top Left Area -->
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-left">
                        <ul class="phone-wrap">
                            <li><span>Liên hệ: </span><a href="#">039 822 5413</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Left Area End Here -->
                <!-- Begin Header Top Right Area -->
                <div class="col-lg-9 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                            <!-- Begin Setting Area -->
                            <li>
                                <div class="ht-setting-trigger"><span>Setting</span></div>
                                <div class="setting ht-setting">
                                    <ul class="ht-setting-list">
                                        <li><a href="login-register.html">My Account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login-register.html">Sign In</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Setting Area End Here -->
                            <!-- Begin Currency Area -->
                            <li>
                                <span class="currency-selector-wrapper">Currency :</span>
                                <div class="ht-currency-trigger"><span>USD $</span></div>
                                <div class="currency ht-currency">
                                    <ul class="ht-setting-list">
                                        <li><a href="#">EUR €</a></li>
                                        <li class="active"><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Currency Area End Here -->
                            <!-- Begin Language Area -->
                            <li>
                                <span class="language-selector-wrapper">Language :</span>
                                <div class="ht-language-trigger"><span>English</span></div>
                                <div class="language ht-language">
                                    <ul class="ht-setting-list">
                                        <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                        <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Language Area End Here -->
                        </ul>
                    </div>
                </div>
                <!-- Header Top Right Area End Here -->
            </div>
        </div>
    </div>--}}
    <!-- Header Top Area End Here -->
    
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="{{route('home')}}">
                            <img src="assets/logo_01_03.png" height="60px" width="60px" alt="Tiệm Bánh TLDcake">
                        </a>
                    </div>
                </div>
                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form action="#" class="hm-searchbox">
                        <select class="nice-select select-search-category">
                            <option value="0">All</option>

                            @foreach($menu_cate_product as $item)
                            <a href="{{route('client.blog.list.cate_blog', ['slug'=> $item->slug])}}" title="{{$item->name}}"><option value="{{$item->id}}"><a href="{{route('client.blog.list.cate_blog', ['slug'=> $item->slug])}}" title="{{$item->name}}"></a>{{$item->name}}</option></a>
                            @endforeach
                        </select>
                        <input type="text" placeholder="Tìm kiếm tên bánh ...">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <!-- Begin Header Middle Wishlist Area -->
                            {{--<li class="hm-wishlist">
                                <a href="wishlist.html">
                                    <span class="cart-item-count wishlist-item-count">0</span>
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </li>--}}
                            <!-- Header Middle Wishlist Area End Here -->
                            <!-- Begin Header Mini Cart Area -->
                            <li class="hm-minicart">
                                <div class="hm-minicart-trigger">
                                    <span class="item-icon"></span>
                                    <span class="item-text"> {{number_format($totalPrice)}} VND
                                        <span class="cart-item-count">{{$cartTotalQuantity}}</span>
                                    </span>
                                </div>
                                <span></span>
                                <div class="minicart">
                                    <ul class="minicart-product-list">
                                        @foreach($carts as $cart)
                                            {{--$cart->attributes->image--}}
                                        <li>
                                            <a href="{{route('client.product.detail', ['slug'=>$cart->attributes->slug])}}" class="minicart-product-image">
                                                <img src="assets/img_product/{{$cart->attributes->image}}" alt="{{$cart->name}}">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">{{$cart->name}}</a></h6>
                                                <span>{{number_format($cart->price)}} x {{$cart->quantity}}</span>
                                            </div>
                                            <a href="{{route('delete.to.cart', ['id_product' => $cart->id])}}">
                                                <button class="close" title="Remove">
                                                    <i class="fa fa-close"></i>
                                                </button>
                                            </a>
                                            
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                    <p class="minicart-total">Tổng tiền: <span>{{number_format($totalPrice)}}</span></p>
                                    <div class="minicart-button">
                                        <a href="{{route('details.cart')}}" class="li-button li-button-fullwidth li-button-dark">
                                            <span>Chi tiết Giỏ hàng</span>
                                        </a>
                                        <a href="{{route('check.out')}}" class="li-button li-button-fullwidth">
                                            <span>Thanh toán</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- Header Mini Cart Area End Here -->
                        </ul>
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu">
                        <nav>
                            {{--<ul>
                                <li class="dropdown-holder"><a href="index.html">Home</a>
                                    <ul class="hb-dropdown">
                                        <li class="active"><a href="index.html">Home One</a></li>
                                        <li><a href="index-2.html">Home Two</a></li>
                                        <li><a href="index-3.html">Home Three</a></li>
                                        <li><a href="index-4.html">Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-holder"><a href="shop-left-sidebar.html">Shop</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="shop-left-sidebar.html">Shop Page Layout</a>
                                            <ul>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product-gallery-left.html">Single Product Style</a>
                                            <ul>
                                                <li><a href="single-product-carousel.html">Single Product Carousel</a></li>
                                                <li><a href="single-product-gallery-left.html">Single Product Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Single Product Gallery Right</a></li>
                                                <li><a href="single-product-tab-style-top.html">Single Product Tab Style Top</a></li>
                                                <li><a href="single-product-tab-style-left.html">Single Product Tab Style Left</a></li>
                                                <li><a href="single-product-tab-style-right.html">Single Product Tab Style Right</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="single-product.html">Single Products</a>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                                <li><a href="single-product-group.html">Single Product Group</a></li>
                                                <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                                <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="blog-left-sidebar.html">Blog</a>
                                    <ul class="hb-dropdown">
                                        <li class="sub-dropdown-holder"><a href="blog-left-sidebar.html">Blog Grid View</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-list-left-sidebar.html">Blog List View</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-details-left-sidebar.html">Blog Details</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-dropdown-holder"><a href="blog-gallery-format.html">Blog Format</a>
                                            <ul class="hb-dropdown hb-sub-dropdown">
                                                <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="megamenu-static-holder"><a href="index.html">Pages</a>
                                    <ul class="megamenu hb-megamenu">
                                        <li><a href="blog-left-sidebar.html">Blog Layouts</a>
                                            <ul>
                                                <li><a href="blog-2-column.html">Blog 2 Column</a></li>
                                                <li><a href="blog-3-column.html">Blog 3 Column</a></li>
                                                <li><a href="blog-left-sidebar.html">Grid Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Grid Right Sidebar</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-details-left-sidebar.html">Blog Details Pages</a>
                                            <ul>
                                                <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Right Sidebar</a></li>
                                                <li><a href="blog-audio-format.html">Blog Audio Format</a></li>
                                                <li><a href="blog-video-format.html">Blog Video Format</a></li>
                                                <li><a href="blog-gallery-format.html">Blog Gallery Format</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Other Pages</a>
                                            <ul>
                                                <li><a href="login-register.html">My Account</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Other Pages 2</a>
                                            <ul>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="shop-left-sidebar.html">Smartwatch</a></li>
                                <li><a href="shop-left-sidebar.html">Accessories</a></li>
                            </ul>--}}
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                {{--@foreach($menu_cate_menu as $cate_menu)
                                <li class="dropdown-holder"><a href="#"  class="menu-top-down">{{$cate_menu->name}}</a>
                                    <ul class="hb-dropdown">
                                    @foreach($menu_cate_product as $cate_product)
                                        @if($cate_product->id_cate_menu == $cate_menu->id)
                                            <li><a href="{{route('client.product.list.cate_product', ['slug'=> $cate_product->slug])}}">{{$cate_product->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </ul>
                                    <ul class="hb-dropdown">
                                    @foreach($menu_cate_blog as $cate_blog)
                                        
                                        @if($cate_blog->id_cate_menu == $cate_menu->id)
                                            <li><a href="{{route('client.blog.list.cate_blog', ['slug'=> $cate_blog->slug])}}">{{$cate_blog->name}}</a></li>
                                        @endif
                                        
                                    @endforeach
                                    </ul>
                                </li>
                                @endforeach--}}
                                {{----}}<li class="dropdown-holder"><a href="#"  class="menu-top-down">Danh mục sản phẩm</a>
                                    <ul class="hb-dropdown">
                                        @foreach($menu_cate_product as $cate_product)
                                            <li><a href="{{route('client.product.list.cate_product', ['slug'=> $cate_product->slug])}}">{{$cate_product->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown-holder"><a href="blog-left-sidebar.html"  class="menu-top-down">Bài viết</a>
                                    <ul class="hb-dropdown">
                                        @foreach($menu_cate_blog as $cate_blog)
                                            <li><a href="{{route('client.blog.list.cate_blog', ['slug'=> $cate_blog->slug])}}">{{$cate_blog->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Liên Hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
        <div class="container"> 
            <div class="row">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End Here -->
</header>
<!-- Header Area End Here -->