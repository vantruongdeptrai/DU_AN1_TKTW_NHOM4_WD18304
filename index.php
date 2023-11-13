<?php
include "view/header.php";
include "database/pdo.php";
include "database/dao/danhmuc.php";
include "database/dao/sanpham.php";
include "database/dao/size.php";
include "database/dao/chitietsanpham.php";
include "global.php";
$list_sp_home = loadall_sanpham_home();
$list_dm_home = loadall_danhmuc();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {

        //         SẢN PHẨM         //
        //hải nguu

        case 'shop-left-sidebar':
            include('view/shop-left-sidebar.php');
            break;
        case 'single-product':
            include('view/single-product.php');
            break;
        case 'wishlist':
            include('view/wishlist.php');
            break;
        case 'cart':
            include('view/cart/cart.php');
            break;
        case 'checkout':
            include('view/checkout.php');
            break;
        case 'my-account':
            include('view/account/my-account.php');
            break;
        case 'login-register':
            include('view/account/login-register.php');
            break;
        case 'contact':
            include('view/contact.php');
            break;
        case 'about':
            include('view/about.php');
            break;
        case 'faq':
            include('view/faq.php');
            break;
        case '404':
            include('view/404.php');
            break;
        case 'blog-left-sidebar':
            include('view/blog/blog-left-sidebar.php');
            break;
        case 'blog-detail-left-sidebar':
            include('view/blog/blog-detail-left-sidebar.php');
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
?>