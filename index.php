<?php
session_start();
include "view/header.php";
include "database/pdo.php";
include "database/dao/danhmuc.php";
include "database/dao/sanpham.php";
include "database/dao/size.php";
include "database/dao/nguoidung.php";
include "database/dao/chitietsanpham.php";
include "global.php";
$list_sp_home = loadall_sanpham_home();
$list_dm_home = loadall_danhmuc();
$load_ctsp_home = load_ctsp();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {

        //         SẢN PHẨM         //

        case 'shop-left-sidebar':
            
            include('view/shop-left-sidebar.php');
            break;
        case 'xem_nhanh':

            include('view/xem_nhanh.php');
        case 'single-product':
            if(isset($_GET['id']) && ($_GET['id'])){
                $id = $_GET['id'];
                $load_one_sp = loadone_sanpham($id);
                //var_dump($load_one_sp);
                extract($load_one_sp);
            }else{
                include("view/home.php");
            }
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

        // ĐĂNG KÍ - ĐĂNG NHẬP 
        case 'my-account':
            include('view/account/my-account.php');
            break;
        case 'login-register':
            include('view/account/login-register.php');
            break;
        case 'dang_ki':
            if (isset($_POST["dang_ki"]) && $_POST["dang_ki"]) {
                $email = $_POST["email"];
                $user = $_POST["user"];
                $pass = $_POST["password"];
                insert_taikhoan($user, $pass, $email);
                echo "Đăng kí thành công ";
            }
            include('view/account/login-register.php');
            break;
        case "dang_nhap":
            if (isset($_POST["dang_nhap"]) && $_POST["dang_nhap"]) {
                $user = $_POST["user"];
                $password = $_POST["password"];
                $checkuser = check_user($user, $password);
                if (is_array($checkuser)) {
                    $_SESSION["user"] = $checkuser;
                    ob_start();
                    header("location: index.php");
                    ob_end_clean();

                } else {
                    echo "Tài khoản không tồn tại , vui lòng kiểm tra hoặc đăng ký !";
                }
            }
            echo "<meta http-equiv='refresh' content='0;URL=index.php'/>";
            include('view/home.php');
            break;
        case 'dang_xuat':
            session_unset();
            session_destroy();
            ob_start();
            header("location: index.php");
            ob_end_clean();
            echo "<meta http-equiv='refresh' content='0;URL=index.php'/>";
            exit();
            //break;
        case 'quen_mk':
            if (isset($_POST["gui_mk"]) && $_POST["gui_mk"]) {
                $email = $_POST["email"];
                $check_email = check_email($email);

                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là : " . $check_email["password"];
                } else {
                    $thongbao = "Email này không tồn tại";
                }

            }
            include "view/account/quen_mk.php";
            break;

        case 'capnhat_taikhoan':
            if(isset($_POST["capnhat_tk"]) && $_POST["capnhat_tk"]){
                $id = $_POST["id_user"];
                $user = $_POST["user"];
                $password = $_POST["password"];
                $sdt = $_POST["sdt"];
                $dia_chi = $_POST["diachi"];
                $email = $_POST["email"];
                update_taikhoan($id,$user,$email, $dia_chi, $sdt);
                $_SESSION["user"] = check_user($user,$password);
                $thongbao = "Cập nhật tài khoản thành công";
            }
            include "view/account/my-account.php";
            break;
        
        case 'doi_mk':
            if (isset($_POST['doi_mk']) && $_POST['doi_mk']) {
                $id = $_POST['id_user'];
                $user = $_POST['user'];
                $password = $_POST['password'];
                $newpass = $_POST['newpassword'];
                update_mk($id,$user,$newpass);
                $_SESSION["user"] = check_user($user,$password);
                $thongbao = "Đổi mật khẩu thành công . Vui lòng đăng nhập lại !";
            }
            include "view/account/doi_mk.php";
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