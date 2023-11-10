<?php
    include "view/header.php";
    if(isset($_GET['act']) && ($_GET['act'] != '')){
        $act = $_GET['act'];
        switch ($act) {
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
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>