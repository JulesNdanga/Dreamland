@extends('pages.index')

@section('header')

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DREAMLAND - Centre de divertissement </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="img/icon/preloader.svg" alt="">
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-area -->
    <header class="header-style-four">
        <div class="header-top-area s-header-top-area d-none d-lg-block">
            <div class="container custom-container-two">
                <div class="row align-items-center">
                    <div class="col-lg-6 d-none d-lg-block">
                        <!-- <div class="header-top-offer">
                                <p>Exclusive Black Friday ! Offer</p>
                                <span class="coming-time" data-countdown="2021/3/15"></span>
                            </div> -->

                    </div>
                    <div class="col-lg-6">
                        <div class="header-social">

                            <span>Follow us on :</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <!-- <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="header-four-wrap">
            <div class="container custom-container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="main-menu menu-style-two">
                            <nav>
                                <div class="logo">
                                    <a href="index-4.html"><img src="img/logo/logo.png" alt="Logo"></a>
                                </div>
                                <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                    <ul>
                                        <li class="show"><a href="index-4.html">Home</a>

                                        </li>


                                        </li>
                                        <li><a href="#">OUR ACTIVITIES</a>
                                            <ul class="submenu">
                                                <li><a href="upcoming-games.html">OUR TOURNAMENTS </a></li>
                                                <li><a href="game-overview.html">ALL ACTIVITIES</a></li>
                                            </ul>
                                        </li>


                                        <li><a href="shop.html">STORE</a></li>

                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="about-us.html">About US</a>

                                        <li><a href="abonnement.html">REGISTER</a></li>
                                        <li><a href="login.html">LOGIN</a>
                                    </ul>
                                </div>
                                <div class="header-action">
                                    <ul>
                                        <li class="header-shop-cart"><a href="#"><i
                                                    class="fas fa-shopping-basket"></i><span>0</span></a>
                                            <ul class="minicart">
                                                <li class="d-flex align-items-start">
                                                    <div class="cart-img">
                                                        <a href="#">
                                                            <img src="img/product/cart_p01.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h4>
                                                            <a href="#">Xbox One Controller</a>
                                                        </h4>
                                                        <div class="cart-price">
                                                            <span class="new">$229.9</span>
                                                            <span>
                                                                <del>$229.9</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="del-icon">
                                                        <a href="#">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-price">
                                                        <span class="f-left">Total:</span>
                                                        <span class="f-right">$239.9</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkout-link">
                                                        <a href="cart.html">Shopping Cart</a>
                                                        <a class="red-color" href="checkout.html">Checkout</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="header-search"><a href="#" data-toggle="modal"
                                                data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                    <!-- Modal Search -->
                    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form>
                                    <input type="text" placeholder="Search here...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

@endsection