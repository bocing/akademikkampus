<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>ANSOFTINDO - University</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('edu/assets/images/fav.png')}}">
        <!-- Bootstrap v5.0.2 css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{ URL::asset('edu/assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('edu/assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home-style2">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{ URL::asset('assets/pre-logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style2">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-7">
                                <ul class="topbar-contact">
                                    <li>
                                        <i class="flaticon-email"></i>
                                        <a href="mailto:support@ansoftindo.com">support@ansoftindo.com</a>
                                    </li>
                                    <li>
                                        <i class="flaticon-call"></i>
                                        <a href="telp:+0813-7447-2466">(+062) 0813-7447-2466</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 text-end">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <i class="fa fa-sign-in"></i>
                                        <a href="{{ URL::asset('login')}}">Login</a>
                                    </li>
                                     
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-5">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part pr-90">
                                        <a class="dark-logo" href="{{ URL::asset('/')}}">
                                            <img src="{{ URL::asset('edu/assets/images/logo-dark.png')}}" alt="">
                                        </a>
                                        <a class="light-logo" href="{{ URL::asset('/')}}">
                                            <img src="{{ URL::asset('edu/assets/images/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                     
                                </div>
                            </div>
                            <div class="col-lg-7 text-center">
                                <div class="rs-menu-area">
                                    <div class="main-menu pr-90">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                           <ul class="nav-menu">
                                              <li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item"> <a href="{{ URL::asset('/')}}">Home</a>
                                                  <ul class="mega-menu"> 
                                                     
                                                  </ul> <!-- //.mega-menu -->
                                              </li>
                                               <li class="menu-item-has-children">
                                                   <a href="#">Profil</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="about.html">About One</a> </li>
                                                       <li><a href="about2.html">About Two</a> </li>
                                                   </ul>
                                               </li>

                                               <li class="menu-item-has-children">
                                                   <a href="#">Layanan</a>
                                                   <ul class="sub-menu">
                                                       <li><a href="course.html">Courses One</a> </li>
                                                       <li><a href="course2.html">Courses Two</a> </li>
                                                       <li><a href="course3.html">Courses Three</a> </li>
                                                       <li><a href="course4.html">Courses Four</a> 
                                                       </li>
                                                       <li><a href="course5.html">Courses Five</a> </li>
                                                       <li><a href="course-single.html">Courses Single</a> </li>
                                                   </ul>
                                               </li>

                                               <li class="menu-item-has-children">
                                                   <a href="#">Akademik</a>
                                                   <ul class="sub-menu">
                                                       <li class="menu-item-has-children right">
                                                           <a href="#">Team</a>
                                                           <ul class="sub-menu right">
                                                               <li><a href="team.html">Team One</a></li>
                                                               <li><a href="team2.html">Team Two</a></li>
                                                               <li><a href="team-single.html">Team Single</a></li>
                                                           </ul>
                                                       </li>
                                                       <li class="menu-item-has-children">
                                                           <a href="#">Event</a>
                                                           <ul class="sub-menu right">
                                                               <li><a href="events-style1.html">Event One</a></li>
                                                               <li><a href="events-style2.html">Event Two</a></li>
                                                               <li><a href="events-style3.html">Event Three</a></li>
                                                           </ul>
                                                       </li>
                                                       <li class="menu-item-has-children">
                                                           <a href="#">Gallery</a>
                                                           <ul class="sub-menu right">
                                                               <li><a href="gallery-style1.html">Gallery One</a></li>
                                                               <li><a href="gallery-style2.html">Gallery Two</a></li>
                                                               <li><a href="gallery-style3.html">Gallery Three</a></li>
                                                           </ul>
                                                       </li>
                                                       <li class="menu-item-has-children">
                                                           <a href="#">Shop</a>
                                                           <ul class="sub-menu right">
                                                               <li><a href="shop.html">Shop</a></li>
                                                               <li><a href="shop-single.html">Shop Single</a></li>
                                                               <li><a href="cart.html">Cart</a></li>
                                                               <li><a href="checkout.html">Checkout</a></li>
                                                           </ul>
                                                       </li>
                                                       <li class="menu-item-has-children">
                                                           <a href="#">Others</a>
                                                           <ul class="sub-menu right">
                                                               <li><a href="faq.html">FAQ</a></li>
                                                               <li><a href="error.html">404 Page</a></li>
                                                               <li><a href="login.html">Login</a></li>
                                                               <li><a href="register.html">Register</a></li>
                                                           </ul>
                                                       </li>
                                                   </ul>
                                               </li>

                                                

                                               <li class="menu-item-has-children">
                                                   <a href="#">Contact</a>
                                                   <ul class="sub-menu">
                                                      <li><a href="contact.html">Contact One</a> </li>
                                                      <li><a href="contact2.html">Contact Two</a> </li>
                                                      <li><a href="contact3.html">Contact Three</a> </li>
                                                      <li><a href="contact4.html">Contact Four</a> </li>
                                                   </ul>
                                               </li>
                                           </ul> <!-- //.nav-menu -->
                                        </nav> 
                                    </div> <!-- //.main-menu -->
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li>
                                                <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                                  <i class="flaticon-search"></i>
                                              </a>
                                            </li>
                                            <li class="icon-bar cart-inner no-border mini-cart-active">
                                                <a class="cart-icon">
                                                    <!-- <span class="cart-count">2</span> -->
                                                    <i class="flaticon-bag"></i>
                                                </a>
                                                <div class="woocommerce-mini-cart text-start">
                                                    <div class="cart-bottom-part">
                                                        <ul class="cart-icon-product-list">
                                                            <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">Law Book</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="{{ URL::asset('edu/assets/images/shop/1.jpg')}}" alt="Product Image"></a>
                                                                </div>
                                                            </li>
                                                            <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">Spirit Level</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="{{ URL::asset('edu/assets/images/shop/2.jpg')}}" alt="Product Image"></a>
                                                                </div>
                                                            </li>
                                                        </ul>

                                                        <div class="total-price text-center">
                                                            <span class="subtotal">Subtotal:</span>
                                                            <span class="current-price">$85.00</span>
                                                        </div>

                                                        <div class="cart-btn text-center">
                                                            <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                                            <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </li>
                                        </ul>
                                        <a id="nav-expander" class="nav-expander style3">
                                            <span class="dot1"></span>
                                            <span class="dot2"></span>
                                            <span class="dot3"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="{{ URL::asset('/')}}"><img src="{{ URL::asset('edu/assets/images/logo-dark.png')}}" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ URL::asset('edu/assets/images/gallery/1.jpg')}}"><img src="{{ URL::asset('edu/assets/images/gallery/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ URL::asset('edu/assets/images/gallery/2.jpg')}}"><img src="{{ URL::asset('edu/assets/images/gallery/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ URL::asset('edu/assets/images/gallery/3.jpg')}}"><img src="{{ URL::asset('edu/assets/images/gallery/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ URL::asset('edu/assets/images/gallery/4.jpg')}}"><img src="{{ URL::asset('edu/assets/images/gallery/4.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ URL::asset('edu/assets/images/gallery/5.jpg')}}"><img src="{{ URL::asset('edu/assets/images/gallery/5.jpg')}}" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{ URL::asset('edu/assets/images/gallery/6.jpg')}}"><img src="{{ URL::asset('edu/assets/images/gallery/6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="map-img">
                        <img src="{{ URL::asset('edu/assets/images/map.jpg')}}" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">
            
            <!-- Slider Section Start -->
            <div class="rs-slider style1">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">World Leading University</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Ansoftindo University</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">World Leading University</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Ansoftindo University</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Section End -->

            <!-- Services Section Start -->
            <div class="rs-services style1">
                <div class="row no-gutter">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly1">
                            <img src="{{ URL::asset('edu/assets/images/services/1.jpg')}}" alt="">
                            <div class="content-part">
                                <img src="{{ URL::asset('edu/assets/images/services/icons/1.png')}}" alt="">
                                <h4 class="title"><a href="{{ URL::asset('daftarpmb')}}">PMB Online</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly2">
                            <img src="{{ URL::asset('edu/assets/images/services/1.jpg')}}" alt="">
                            <div class="content-part">
                                <img src="{{ URL::asset('edu/assets/images/services/icons/2.png')}}" alt="">
                                <h4 class="title"><a href="{{ URL::asset('login')}}">Tendik PMB</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly3">
                            <img src="{{ URL::asset('edu/assets/images/services/1.jpg')}}" alt="">
                            <div class="content-part">
                                <img src="{{ URL::asset('edu/assets/images/services/icons/3.png')}}" alt="">
                                <h4 class="title"><a href="{{ URL::asset('login')}}">Dosen</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly4">
                            <img src="{{ URL::asset('edu/assets/images/services/1.jpg')}}" alt="">
                            <div class="content-part">
                                <img src="{{ URL::asset('edu/assets/images/services/icons/1.png')}}" alt="">
                                <h4 class="title"><a href="{{ URL::asset('login')}}">Tendik Universitas</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style2 pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 pr-65 md-pr-15 md-mb-50">
                            <div class="about-intro">
                                <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="sub-title primary">About Educavo</div>
                                    <h2 class="title mb-21 white-color">Welcome to Ansoftindo University</h2>
                                    <div class="desc big white-color">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua  enims ad minim.</div>
                                </div>
                                <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="readon2" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 lg-pl-0 ml--25 md-ml-0">
                            <div class="row rs-counter couter-area mb-40">
                                <div class="col-md-4">
                                    <div class="counter-item one">
                                        <h2 class="number rs-count kplus">2</h2>
                                        <h4 class="title mb-0">Students</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item two">
                                        <h2 class="number rs-count">3.50</h2>
                                        <h4 class="title mb-0">Average CGPA</h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="counter-item three">
                                        <h2 class="number rs-count percent">95</h2>
                                        <h4 class="title mb-0">Graduates</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row grid-area">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="image-grid">
                                        <img src="{{ URL::asset('edu/assets/images/about/style2/grid1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image-grid">
                                        <img src="{{ URL::asset('edu/assets/images/about/style2/grid2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Degree Section Start -->
            <div class="rs-degree style1 modify gray-bg pt-100 pb-70 md-pt-70 md-pb-40">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="sec-title wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="sub-title primary">Degree categoris</div>
                                <h2 class="title mb-0">Successfully Complete A Degree at Ansoftindo University</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ URL::asset('edu/assets/images/degrees/1.jpg')}}" alt="">
                                <div class="title-part">
                                    <h4 class="title">Undergraduate</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Undergraduate</a></h4>
                                    <p class="desc">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
                                    <div class="btn-part">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ URL::asset('edu/assets/images/degrees/2.jpg')}}" alt="">
                                <div class="title-part">
                                    <h4 class="title">Postgraduate</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">Postgraduate</a></h4>
                                    <p class="desc">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
                                    <div class="btn-part">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ URL::asset('edu/assets/images/degrees/3.jpg')}}" alt="">
                                <div class="title-part">
                                    <h4 class="title">PHD Scholarships</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">PHD Scholarships</a></h4>
                                    <p class="desc">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
                                    <div class="btn-part">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ URL::asset('edu/assets/images/degrees/4.jpg')}}" alt="">
                                <div class="title-part">
                                    <h4 class="title">International Hubs</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">International Hubs</a></h4>
                                    <p class="desc">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
                                    <div class="btn-part">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30">
                            <div class="degree-wrap">
                                <img src="{{ URL::asset('edu/assets/images/degrees/5.jpg')}}" alt="">
                                <div class="title-part">
                                    <h4 class="title">PHD Scholarships</h4>
                                </div>
                                <div class="content-part">
                                    <h4 class="title"><a href="#">PHD Scholarships</a></h4>
                                    <p class="desc">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod </p>
                                    <div class="btn-part">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Degree Section End -->

            <!-- CTA Section Start -->
            <div class="rs-cta style2">
                <div class="partition-bg-wrap home2">
                    <div class="container">
                        <div class="row y-bottom">
                            <div class="col-lg-6 pb-50 md-pt-100 md-pb-100">
                                <div class="video-wrap">
                                    <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                        <i class="fa fa-play"></i>
                                        <h4 class="title mb-0">Take a Video  Tour at Ansoftindo</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 pl-62 pt-134 pb-150 md-pl-15 md-pt-45 md-pb-50">
                                <div class="sec-title mb-40 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <h2 class="title mb-16">Admission Open for 2020</h2>
                                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam. Aenean massa. Cum sociis natoque penatibus et magnis.</div>
                                </div>
                                <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <a class="readon2" href="#">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End -->

            <!-- Latest Events Section Start -->
            <div class="rs-latest-events style1 bg-wrap pt-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 pr-65 pt-24 md-pt-0 md-pr-15 md-mb-30">
                            <div class="sec-title mb-42">
                                <div class="sub-title primary">Latest Events</div>
                                <h2 class="title mb-0">Ansoftindo Events</h2>
                            </div>
                            <div class="single-img wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <img src="{{ URL::asset('edu/assets/images/event/single.jpg')}}" alt="Event Image">
                            </div>
                        </div>
                        <div class="col-lg-6 lg-pl-0">
                            <div class="event-wrap">
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date-part bgc1">
                                        <span class="month">June</span>
                                        <div class="date">20</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Accessories Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <div class="date-part bgc2">
                                        <span class="month">June</span>
                                        <div class="date">21</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Accessories Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <div class="date-part bgc3">
                                        <span class="month">June</span>
                                        <div class="date">22</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Accessories Learning</a></h4>
                                    </div>
                                </div>
                                <div class="btn-part mt-55 md-mt-25 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <a href="#">View All Events</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Latest Events Section End -->

            <!-- Partner Start -->
            <div class="rs-partner pt-100 pb-100 md-pt-70 md-pb-70 gray-bg">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <a href="#"><img src="{{ URL::asset('edu/assets/images/partner/1.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ URL::asset('edu/assets/images/partner/2.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ URL::asset('edu/assets/images/partner/3.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ URL::asset('edu/assets/images/partner/4.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ URL::asset('edu/assets/images/partner/5.png')}}" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="{{ URL::asset('edu/assets/images/partner/6.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style2 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 pr-90 md-pr-15 md-mb-30">
                            <div class="donation-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <img src="{{ URL::asset('edu/assets/images/donor/1.jpg')}}" alt="">
                                <h3 class="title mb-10">Donation helps us</h3>
                                <div class="desc mb-38">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua  enims ad minim.</div>
                                <div class="btn-part">
                                    <a class="readon2 mod" href="#">Become a donor</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 lg-pl-0 ml--15 md-ml-0">
                            <div class="testi-wrap mb-50 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="{{ URL::asset('edu/assets/images/testimonial/style2/1.jpg')}}" alt="">
                                </div>
                                <div class="content-part pt-12">
                                    <div class="desc">Education is the passport to the future for tomorrow belongs to those who prepare for it today</div>
                                    <div class="info">
                                        <h5 class="name">Mahadi mansura</h5>
                                        <div class="designation">Head Teacher</div>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-wrap wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                <div class="img-part">
                                    <img src="{{ URL::asset('edu/assets/images/testimonial/style2/2.jpg')}}" alt="">
                                </div>
                                <div class="content-part pt-12">
                                    <div class="desc">Education is the passport to the future for tomorrow belongs to those who prepare for it today</div>
                                    <div class="info">
                                        <h5 class="name">Jonathon Lary</h5>
                                        <div class="designation">Math Teacher</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Section Gray bg Wrap start -->
            <div class="gray-bg">
                <!-- Blog Section Start -->
                <div id="rs-blog" class="rs-blog style2 pt-94 pb-100 md-pt-64 md-pb-70">
                    <div class="container">
                        <div class="sec-title mb-60 text-center">
                            <div class="sub-title primary">News Update </div>
                            <h2 class="title mb-0">Latest News & Events</h2>
                        </div>
                        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ URL::asset('edu/assets/images/blog/style2/1.jpg')}}" alt="">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single.html">University While The Lovely Valley Team Work</a></h3>
                                    <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(12) Comments</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ URL::asset('edu/assets/images/blog/style2/2.jpg')}}" alt="">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single.html">High School Program Starting Soon 2021</a></h3>
                                    <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(12) Comments</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ URL::asset('edu/assets/images/blog/style2/3.jpg')}}" alt="">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single.html">Modern School The Lovely Valley Team Work</a></h3>
                                    <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(12) Comments</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-item">
                                <div class="image-part">
                                    <img src="{{ URL::asset('edu/assets/images/blog/style2/2.jpg')}}" alt="">
                                </div>
                                <div class="blog-content new-style">
                                    <ul class="blog-meta">
                                        <li><i class="fa fa-user-o"></i> Admin</li>
                                        <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                    </ul>
                                    <h3 class="title"><a href="blog-single.html">While The Lovely Valley Team Work</a></h3>
                                    <div class="desc">the acquisition of knowledge, skills, values befs, and habits. Educational methods include teach ing, training, storytelling</div>
                                    <ul class="blog-bottom">
                                        <li class="cmnt-part"><a href="#">(12) Comments</a></li>
                                        <li class="btn-part"><a class="readon-arrow" href="#">Read More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Section End -->

                <!-- Newsletter section start -->
                <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="sec-title">
                                        <div class="sub-title white-color">Newsletter</div>
                                        <h2 class="title mb-0 white-color">Subscribe Us to join <br> Our Community </h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form class="newsletter-form">
                                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section end -->
            </div>
            <!-- Section bg Wrap 2 End -->
        </div> 
        <!-- Main content End --> 

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Explore</h4>
                            <ul class="site-map">
                                <li><a href="#">eLearning School</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Become A Teacher</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="site-map">
                                <li><a href="#">All Courses</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Genarel Education</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                            <h4 class="widget-title">Resources</h4>
                            <ul class="site-map">
                                <li><a href="#">Become A Teacher</a></li>
                                <li><a href="#">Instructor/Student Profile</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <h4 class="widget-title">Address</h4>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">503 Old Buffalo Street Northwest #205 New York-3087</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:(123)-456-7890">(123)-456-7890</a> , 
                                        <a href="tel:(123)-456-7890">(123)-456-7890</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:infoname@gmail.com">infoname@gmail.com</a> , 
                                        <a href="#">www.yourname.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-4 md-mb-20">
                            <div class="footer-logo md-text-center">
                                <a href="{{ url('/') }}"><img src="{{ URL::asset('edu/assets/images/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-20">
                            <div class="copyright text-center md-text-start">
                                <p>&copy; 2020 All Rights Reserved. Developed By <a href="http://rstheme.com/">RSTheme</a></p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-end md-text-start">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
            <button type="button" class="close" data-bs-dismiss="modal">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="{{ URL::asset('edu/assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{ URL::asset('edu/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v5.0.2 js -->
        <script src="{{ URL::asset('edu/assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{ URL::asset('edu/assets/js/rsmenu-main.js')}}"></script> 
        <!-- op nav js -->
        <script src="{{ URL::asset('edu/assets/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('edu/assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick js -->
        <script src="{{ URL::asset('edu/assets/js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{ URL::asset('edu/assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{ URL::asset('edu/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{ URL::asset('edu/assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{ URL::asset('edu/assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{ URL::asset('edu/assets/js/jquery.counterup.min.js')}}"></script>        
         <!-- counter top js -->
        <script src="{{ URL::asset('edu/assets/js/waypoints.min.js')}}"></script>
        <!-- video js -->
        <script src="{{ URL::asset('edu/assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{ URL::asset('edu/assets/js/jquery.magnific-popup.min.js')}}"></script>      
        <!-- plugins js -->
        <script src="{{ URL::asset('edu/assets/js/plugins.js')}}"></script>
        <!-- contact form js -->
        <script src="{{ URL::asset('edu/assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{ URL::asset('edu/assets/js/main.js')}}"></script>
    </body>
</html>