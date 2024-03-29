<?php
include 'lib/session.php';
session::init();
include 'lib/database.php';
include 'halpers/formet.php';


spl_autoload_register(function ($classes) {
    include_once "classes/" . $classes . ".php";
});
$db = new database();
$fm = new Format();
$contact_message_class = new Contactmessage();
$Slider_class = new Slider();
$gallery_class = new Galleries();
$pakages_class = new Pakages();
$order_class = new OrderClass();
$services_class = new Service();
$setting = new defaultSettings();
$aboutPageClass = new AboutPageClass();
$data = $setting->showById(null);
$default_settings_items = $data->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!DOCTYPE html>
    <html dir="ltr" lang="en-US">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <!-- Stylesheets
	============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="assets/style.css" type="text/css" />

        <link rel="stylesheet" href="assets/css/swiper.css" type="text/css" />


        <link rel="stylesheet" href="assets/css/dark.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/font-icons.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css" />
        <link rel="stylesheet" href="assets/my.css" type="text/css" />
        <link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/images/logo.jpg" type="image/gif" sizes="16x16">
        <!-- Document Title
	============================================= -->
        <title><?= $default_settings_items['title'] ?></title>

    </head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- Top Bar
		============================================= -->
        <div id="top-bar" class="py-3 text-center bg-color-light">
            <div class="container clearfix">
                <div class="d-md-flex justify-content-md-between align-items-md-center">
                    <h4 class="mb-2 mb-md-0 h6 fw-normal">Free Shipping on every order <span class="mx-2 text-black-50">&middot;</span> 30 Days Return</h4>

                    <h4 class="mb-0 h6 fw-normal">Need Help? Call us at <a class="color" href="tel:<?= $default_settings_items['phone'] ?>"><u class="fw-medium"><?= $default_settings_items['phone'] ?></u></a> or <a class="color" href="mailto:<?= $default_settings_items['email'] ?>"><u class="fw-medium">email</u></a> us.</h4>
                </div>
            </div>
        </div><!-- #top-bar end -->
        <!-- Header
		============================================= -->
        <header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="index.php">
                                <h1 style="margin: 0;" class="logo_area--text"><?= $default_settings_items['title'] ?></h1>
                            </a>
                        </div><!-- #logo end -->
                        <div class="header-misc">

                            <!-- Top Search
							============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                            </div><!-- #top-search end -->

                            <!-- Top Cart
							============================================= -->
                            <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                                <!-- <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">5</span></a> -->
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                                    <span class="top-cart-item-price d-block">৳ 19.99</span>
                                                </div>
                                                <div class="top-cart-item-quantity">x 2</div>
                                            </div>
                                        </div>
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#">Light Blue Denim Dress</a>
                                                    <span class="top-cart-item-price d-block">৳ 24.99</span>
                                                </div>
                                                <div class="top-cart-item-quantity">x 3</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action">
                                        <span class="top-checkout-price">৳ 114.95</span>
                                        <a href="#" class="button button-3d button-small m-0">View Cart</a>
                                    </div>
                                </div>
                            </div><!-- #top-cart end -->

                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="index.php">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="pakages.php">
                                        <div>Pakages</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="about.php">
                                        <div>About</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="gallerie.php">
                                        <div>Galleries</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="contact.php">
                                        <div>Contact</div>
                                    </a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->