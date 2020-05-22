<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <base href="{{asset('')}}">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->

        <link rel="shortcut icon" type="image/x-icon" href="assets/logo.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="frontend-template/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="frontend-template/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="frontend-template/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="frontend-template/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="frontend-template/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="frontend-template/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="frontend-template/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="frontend-template/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="frontend-template/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="frontend-template/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="frontend-template/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="frontend-template/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="frontend-template/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="frontend-template/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="frontend-template/css/responsive.css">
        <!-- Modernizr js -->
        <script src="frontend-template/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

        
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Li's Breadcrumb Area -->
			<div class="breadcrumb-area">
			    <div class="container">
			        <div class="breadcrumb-content">
			            <ul>
			                <li><a href="{{route('home')}}">Home</a></li>
			                <li class="active">Login</li>
			            </ul>
			        </div>
			    </div>
			</div>
			<div>
	            @if(count($errors) > 0)
	                <div class="alert alert-danger">
	                    @foreach($errors->all() as $err)
	                        {{$err}}<br>
	                    @endforeach

	                </div>

	            @endif
		         
		    </div>
			<!-- Li's Breadcrumb Area End Here -->
			<!-- Begin Login Content Area -->
			<div class="page-section mb-60 pt-60">
			    <div class="container">
			        <div class="row">
			            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30" style="margin: 0 auto;">
			                <!-- Login Form s-->
			                <form action="{{route('admin.login.post')}}" method="post" enctype="multipart/form-data">
        						@csrf
			                    <div class="login-form">
			                        <h4 class="login-title">Login</h4>
			                        <div class="row">
			                        	<div class="form-group">
											@if(session('thongbao'))
											<div class="alert alert-danger">
												{{session('thongbao')}}
											</div>
											@endif
										</div>
			                            <div class="col-md-12 col-12 mb-20">
			                                <label>Email Address*</label>
			                                <input class="mb-0" name="email" type="email" placeholder="Email Address">
			                            </div>
			                            <div class="col-12 mb-20">
			                                <label>Password</label>
			                                <input class="mb-0" type="password" name="password" placeholder="Password">
			                            </div>
			                            <div class="col-md-8">
			                                <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
			                                    <input type="checkbox" id="remember_me">
			                                    <label for="remember_me">Remember me</label>
			                                </div>
			                            </div>
			                            <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
			                                <a href="#"> Forgotten pasward?</a>
			                            </div>
			                            <div class="col-md-12">
			                                <button class="register-button mt-0">Login</button>
			                            </div>
			                        </div>
			                    </div>
			                </form>
			            </div>
			            <!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
			                <form action="#">
			                    <div class="login-form">
			                        <h4 class="login-title">Register</h4>
			                        <div class="row">
			                            <div class="col-md-6 col-12 mb-20">
			                                <label>First Name</label>
			                                <input class="mb-0" type="text" placeholder="First Name">
			                            </div>
			                            <div class="col-md-6 col-12 mb-20">
			                                <label>Last Name</label>
			                                <input class="mb-0" type="text" placeholder="Last Name">
			                            </div>
			                            <div class="col-md-12 mb-20">
			                                <label>Email Address*</label>
			                                <input class="mb-0" type="email" placeholder="Email Address">
			                            </div>
			                            <div class="col-md-6 mb-20">
			                                <label>Password</label>
			                                <input class="mb-0" type="password" placeholder="Password">
			                            </div>
			                            <div class="col-md-6 mb-20">
			                                <label>Confirm Password</label>
			                                <input class="mb-0" type="password" placeholder="Confirm Password">
			                            </div>
			                            <div class="col-12">
			                                <button class="register-button mt-0">Register</button>
			                            </div>
			                        </div>
			                    </div>
			                </form>
			            </div> -->
			        </div>
			    </div>
			</div>
			<!-- Login Content Area End Here -->
            
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="frontend-template/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="frontend-template/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="frontend-template/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="frontend-template/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="frontend-template/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="frontend-template/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="frontend-template/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="frontend-template/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="frontend-template/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="frontend-template/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="frontend-template/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="frontend-template/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="frontend-template/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="frontend-template/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="frontend-template/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="frontend-template/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="frontend-template/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="frontend-template/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="frontend-template/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="frontend-template/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="frontend-template/js/main.js"></script>
    </body>

<!-- index30:23-->
</html>


				