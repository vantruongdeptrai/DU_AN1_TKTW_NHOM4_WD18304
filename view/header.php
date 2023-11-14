<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from template.hasthemes.com/bucker/bucker/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 14:31:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bucker - Bakery Shop HTML Template</title>
    <meta name="description"
        content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL.html" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Bucker -  Bakery Shop Bootstrap 5 Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Bucker -  Bakery Shop Bootstrap 5 Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Bucker -  Bakery Shop Bootstrap 5 Template" />

    <!-- Add site Favicon -->
    <link rel="icon" href="../../../hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="../../../hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon" href="../../../hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage"
        content="../../../hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

    <!-- CSS 
    ========================= -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>


    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>
</head>

<body>
    <!--header area start-->
    <header class="header_section">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header_top_inner d-flex justify-content-between">
                            <?php
                            if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                                extract($_SESSION["user"]);
                                ?>
                                <div class="welcome_text">
                                    <p>World Wide Completely Free Returns and Free Shipping</p>
                                </div>
                                <div class="header_top_sidebar d-flex align-items-center">
                                    <ul class="d-flex">
                                        <li><i class="icofont-phone"></i> <a href="tel:+84339925350"></a>
                                        </li>
                                        <li><i class="icofont-envelope"></i> <a
                                                href="mailto:demo@example.com">demo@example.com</a></li>
                                        <li class="account_link"> <i class="icofont-user-alt-7"></i><a href="#"><?php echo $user?></a>
                                            <ul class="dropdown_account_link">
                                                <li><a href="index.php?act=my-account">My Account</a></li>
                                                <li><a href="index.php?act=login-register">Login</a></li>
                                                <li><a href="index.php?act=contact">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php
                            } else {
                                ?>
                            <div class="welcome_text">
                                <p>World Wide Completely Free Returns and Free Shipping</p>
                            </div>
                            <div class="header_top_sidebar d-flex align-items-center">
                                <ul class="d-flex">
                                    <li><i class="icofont-phone"></i> <a href="tel:+00123456789">+00 123 456 789</a>
                                    </li>
                                    <li><i class="icofont-envelope"></i> <a
                                            href="mailto:demo@example.com">demo@example.com</a></li>
                                    <li class="account_link"> <i class="icofont-user-alt-7"></i><a href="#">Account</a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="index.php?act=my-account">My Account</a></li>
                                            <li><a href="index.php?act=login-register">Login</a></li>
                                            <li><a href="index.php?act=contact">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a class="active" href="index.php">Home</a>

                                    </li>
                                    <li><a href="index.php?act=about">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="bucker-dropdown">
                                            <li><a href="index.php?act=faq">FAQ</a></li>
                                            <li><a href="index.php?act=404">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="index.php?act=shop-left-sidebar">Shop</a>
                                        <ul class="megamenu grid-container">
                                            <li class="grid-item">
                                                <span class="title">Shop Layout</span>
                                                <ul>
                                                    <li>
                                                        <a href="shop-fullwidth.html">Shop Fullwidth</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="grid-item">
                                                <span class="title">Product Style</span>
                                                <ul>
                                                    <li>
                                                        <a href="single-product.html">Single Product Default</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="grid-item">
                                                <span class="title">Popular Products</span>
                                                <ul>
                                                    <li>
                                                        <a href="shop-left-sidebar.html">Classic Carrot Cake</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="grid-item">
                                                <span class="title">Product Related</span>
                                                <ul>
                                                    <li>
                                                        <a href="index.php?act=my-account">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=login-register">Login | Register</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=cart">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=wishlist">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=compare">Compare</a>
                                                    </li>
                                                    <li>
                                                        <a href="index.php?act=checkout">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?act=blog-left-sidebar">Blog</a>
                                        <ul class="bucker-dropdown">
                                            <li class="submenu-holder"><a href="index.php?act=blog-left-sidebar">Blog
                                                    Holder</a>
                                                <ul class="submenu">
                                                    <li><a href="index.php?act=blog-left-sidebar">Blog Left Sidebar</a>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="index.php?act=contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header_account">
                            <ul class="d-flex">
                                <li class="header_search"><a href="javascript:void(0)"><i class="pe-7s-search"></i></a>
                                </li>
                                <li class="header_wishlist"><a href="wishlist.html"><i class="pe-7s-like"></i></a></li>
                                <li class="shopping_cart"><a href="javascript:void(0)"><i class="pe-7s-shopbag"></i></a>
                                    <span class="item_count">2</span>
                                </li>
                            </ul>
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="single-product.html"><img src="assets/img/product/product1.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="single-product.html">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$125.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$125.00</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="index.php?act=cart">View cart</a>
            </div>
            <div class="cart_button">
                <a href="index.php?act=checkout"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!-- mini cart end -->
    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="#">
            <input class="border-0" placeholder="Search products..." type="text">
            <button type="submit"><span class="pe-7s-search"></span></button>
        </form>
    </div>