<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.codexcoder.com/eventrum/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2016 10:15:13 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Bolly Chicks</title>

	<!-- Meta --> 
    <meta name="description" content="Eventrum Template is a Creative Multipurpose HTML5 Event Template">
    <meta name="keywords" content="Event, HTML5, Multipurpose, Template">
    <meta name="author" content="CodexCoder">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.ico" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Framework Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datepicker.css"/>

    <!-- Fonts Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css"/> 

    <!-- Plugins Styles --> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fs.boxer.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/hover-min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <!-- Project Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css"> 
    
</head>
<body>
    <!--  preloader  -->
    <!--<div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>-->
    <!-- start header  -->
    <header id="header">
        <nav id="primary-menu" class="primary-menu transparent-bg-menu">
            <div class="primary-menu-inner">
                <div class="container">
                    <div class="row">
                        <div class="menu-area">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand logo" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/assets/images/logo.png" alt="Logo"></a>
                                <a class="navbar-brand scroll-logo" href="index.html"><img src="<?php echo base_url();?>/assets/images/main-logo.png" alt="Logo"></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="">
                                        <a href="<?php echo base_url();?>">Home</a>
                                        <!-- <ul class="dropdown-menu sub-menu menu-sub-content">
                                            <li class="active-child-menu"><a href="index.html">Homepage One</a></li>
                                            <li><a href="homepage2.html">Homepage Two</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="active"><a href="<?php echo base_url();?>home/buytickets">aBuy Tickets</a></li>
                                    <li class="dropdown menu-item menu-item-type-taxonomy menu-item-object-category aaamenu-item-has-children menu-item-376">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                                        <!-- <ul class="dropdown-menu sub-menu menu-sub-content">
                                            <li><a href="pricing-table.html">Pricing Table</a></li>
                                            <li><a hrefa"event-schedule.html">Event Schedule</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="error.html">404 page</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="sponsor.html">Sponsors</a></li>
                                    <li class="dropdown menu-item menu-item-type-taxonomy menu-item-object-category aaaaamenu-item-has-children menu-item-376">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <!-- <ul class="dropdown-menu sub-menu menu-sub-content">
                                            <li><a href="shop-page.html">Blog</a></li>
                                            <li><a href="product-detail.html">Product Details</a></li>
                                            <li><a href="cart-page.html">Cart Page</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="dropdwon menu-item menu-item-type-taxonomy menu-item-object-category aamenu-item-has-children menu-item-376">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us</a>
                                        <!-- <ul class="dropdown-menu sub-menu menu-sub-content">
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul> -->
                                    </li>
                                    <?php 
                                    $access = $this->session->userdata( 'logininfo' );
                                    $access['email'];
                                    if ( isset( $access )) { ?>
                                    <li><a href="<?php echo base_url();?>auth/myaccount">My Account</a></li>
                                    <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
                                     <?php }
                                    else
                                        {
                                         ?>
                                        <li><a href="<?php echo base_url();?>auth/registration">Login/Registration</a></li>
                                         <?php 
                                        }

                                     ?>
                                </ul>
                                <div class="menu-shopping-cart">
                                    <div class="cart-icon">
                                        <!-- <span><i class="fa fa-shopping-cart"></i> -->
                                            <!-- <span class="item-counter">04</span> -->
                                        </span>
                                        <div class="menu-cart-content">
                                            <div class="menu-cart-item">
                                                <div class="menu-cart-img">
                                                    <a href="#"><img src="<?php echo base_url();?>/assets/images/menu-cart-img1.jpg" alt="cart-img"></a>
                                                </div>
                                                <div class="menu-cart-desc">
                                                    <a href="#">Eventrum skractch</a>
                                                    <p>1x <span>$345.00</span></p>
                                                </div>
                                                <div class="menu-cart-btn">
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="menu-cart-item">
                                                <div class="menu-cart-img">
                                                    <a href="#"><img src="<?php echo base_url();?>/assets/images/menu-cart-img1.jpg" alt="cart-img"></a>
                                                </div>
                                                <div class="menu-cart-desc">
                                                    <a href="#">Eventrum skractch</a>
                                                    <p>1x <span>$345.00</span></p>
                                                </div>
                                                <div class="menu-cart-btn">
                                                    <a href="#"><i class="fa fa-pencil"></i></a>
                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                </div>
                                            </div>
                                            <div class="menu-cart-bottom">
                                                <div class="sub-total">
                                                    <p>Subtotal: <span>$546.00</span></p>
                                                </div>
                                                <div class="menu-cart-action">
                                                    <button class="menu-cart-btn-action">CheckOut</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.menu-area -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </nav>
    </header>
    <!-- end header  -->
       