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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
            <?php if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                extract($_SESSION["user"]); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header_top_inner d-flex justify-content-between">
                                <div class="welcome_text">
                                    <p>Xin chào bạn đến với Bucker</p>
                                </div>
                                <div class="header_top_sidebar d-flex align-items-center">
                                    <ul class="d-flex">
                                        <li><i class="icofont-phone"></i> <a href="tel:+84339925350"></a>
                                        </li>
                                        <li><i class="icofont-envelope"></i> <a href="mailto:demo@example.com">
                                                <?php echo $email ?>
                                            </a></li>
                                        <li class="account_link"> <i class="icofont-user-alt-7"></i><a href="#">
                                                <?php echo $user ?>
                                            </a>
                                            <ul class="dropdown_account_link">
                                                <li><a href="index.php?act=my-account">Tài khoản của tôi</a></li>
                                                <li><a href="index.php?act=dang_xuat">Đăng xuất</a></li>
                                                <li><a href="index.php?act=doi_mk">Đổi mật khẩu</a></li>
                                                <li><a href="index.php?act=contact">Liên hệ</a></li>
                                                <?php if ($vai_tro == 1) { ?>
                                                    <li><a href="admin/index.php">Đăng nhập admin</a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header_top_inner d-flex justify-content-between">
                            <div class="welcome_text">
                                    <p>Xin chào bạn đến với Bucker</p>
                                </div>
                                <div class="header_top_sidebar d-flex align-items-center">
                                    <ul class="d-flex">
                                        <li><i class="icofont-phone"></i> <a href="tel:+84339925350"></a>
                                        </li>
                                        <li><i class="icofont-envelope"></i> <a href="mailto:demo@example.com">
                                                <?php //echo $email ?>Email
                                            </a></li>
                                        <li class="account_link"> <i class="icofont-user-alt-7"></i><a href="#">
                                                <?php //echo $user ?>Tài khoản
                                            </a>
                                            <ul class="dropdown_account_link">
                                                <li><a href="index.php?act=my-account">Tài khoản của tôi</a></li>
                                                <li><a href="index.php?act=login">Đăng nhập</a></li>
                                                <li><a href="index.php?act=register">Đăng kí</a></li>
                                                <li><a href="index.php?act=contact">Liên hệ</a></li>
                                                <li>
                                                    <a href="index.php?act=quen_mk">Quên mật khẩu</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
                                    <li><a class="active" href="index.php">Trang chủ</a>
                                    </li>
                                    <li><a href="#">Bài viết</a>
                                        <ul class="bucker-dropdown">
                                            <li><a href="index.php?act=faq">FAQ</a></li>
                                            <li><a href="index.php?act=404">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="index.php?act=shop-left-sidebar">Sản phẩm</a>
                                    </li>
                                    <li><a href="index.php?act=blog-left-sidebar">Blog</a>
                                    </li>
                                    <li><a href="index.php?act=contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header_account">
                            <ul class="d-flex">
                                <li class="header_search"><a><i class="pe-7s-search"></i></a>
                                </li>
                                
                                <li class="shopping_cart"><a href="index.php?act=add_to_cart"><i class="pe-7s-shopbag"></i></a>
                                    <!-- <span class="item_count">2</span> -->
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--mini cart-->
    
    <!-- mini cart end -->
    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="index.php?act=shop-left-sidebar" method="post">
            <input class="border-0" placeholder="Search products..." type="text" name="keyword">
            <input type="submit" class="pe-7s-search"><span ></span></input>
        </form>
    </div>