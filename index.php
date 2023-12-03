<?php
session_start();
include "view/header.php";
include "database/pdo.php";
include "database/dao/danhmuc.php";
include "database/dao/sanpham.php";
include "database/dao/size.php";
include "database/dao/nguoidung.php";
include "database/dao/chitietsanpham.php";
include "database/dao/giohang.php";
include "database/dao/donhang.php";
include "database/dao/phuongthuctt.php";
include "database/dao/trangthai.php";
include "database/dao/chitietdonhang.php";
include "database/dao/chitietgiohang.php";
include "global.php";
$list_sp_home = loadall_sanpham_home();
$list_dm_home = loadall_danhmuc_home();
$load_ctsp_home = load_ctsp(0);

if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {

        //         SẢN PHẨM         //

        case 'shop-left-sidebar':

            if (isset($_GET["id_dm"]) && $_GET["id_dm"] > 0) {
                $id_dm = $_GET["id_dm"];
                $load_ctsp_home = load_ctsp($id_dm);
            }
            //$load_ctsp_home = load_ctsp(0);
            include('view/shop-left-sidebar.php');
            break;
        case 'xem_nhanh':

            include('view/xem_nhanh.php');
        case 'single-product':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];

                $load_one_ctsp = load_one_ctsp($id);
                extract($load_one_ctsp);
            } else {
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

        case 'login':
            include('view/account/login.php');
            break;
        case 'register':
            include('view/account/register.php');
            break;
        case 'dang_ki':
            if (isset($_POST["dang_ki"]) && $_POST["dang_ki"]) {
                $email = $_POST["email"];
                $user = $_POST["user"];
                $pass = $_POST["password"];
                insert_taikhoan($user, $pass, $email);
                echo "Đăng kí thành công ";
            }
            include('view/account/register.php');
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
        case 'quen_mk':
            if (isset($_POST["gui_mk"]) && $_POST["gui_mk"]) {

                $email = $_POST["email"];
                $check_email = check_email($email);
                //var_dump($check_email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là : " . $check_email["password"];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include "view/account/quen_mk.php";
            break;

        case 'capnhat_taikhoan':
            if (isset($_POST["capnhat_tk"]) && $_POST["capnhat_tk"]) {
                $id = $_POST["id_user"];
                $user = $_POST["user"];
                $password = $_POST["password"];
                $sdt = $_POST["sdt"];
                $dia_chi = $_POST["diachi"];
                $email = $_POST["email"];
                update_taikhoan($id, $user, $email, $dia_chi, $sdt);
                $_SESSION["user"] = check_user($user, $password);
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
                update_mk($id, $user, $newpass);
                $_SESSION["user"] = check_user($user, $password);
                $thongbao = "Đổi mật khẩu thành công . Vui lòng đăng nhập lại !";
            }
            include "view/account/doi_mk.php";
            break;
        case 'my-account':
            $loadall_donhang = loadall_donhang();
            $load_trangthai = load_trangthai();
            $load_pttt = load_pttt();
            $load_chitiet_giohang = load_chitiet_giohang();
            $loadall_chitiet_donhang = loadall_chitiet_donhang();
            $id_user = $_SESSION["user"]["id_user"];
            $load_donhang_iduser = load_donhang_iduser($id_user);
            //$loadall_gio_hang = loadall_gio_hang();
            include('view/account/my-account.php');
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

        // GIỎ HÀNG 
        case 'mua_them':
            // $loadall_gio_hang = loadall_gio_hang();
            include("view/shop-left-sidebar.php");
            break;
        case 'add_to_cart':
            //tạo giỏ hàng
            if (isset($_POST["add_to_cart"]) && $_POST["add_to_cart"]) {
                if (isset($_SESSION["user"])) {
                    $id_ctsp = $_POST["id_ctsp"];
                    $id_user = $_SESSION["user"]["id_user"];
                    $ngay_tao_gh = date("Y-m-d H:i:s");
                    if (isset($_POST["so_luong"])) {
                        $so_luong = $_POST["so_luong"];
                    } else {
                        $so_luong = 1;
                    }
                    $gio_hang = gio_hang();
                    //var_dump($gio_hang);
                    //kiểm tra giỏ hàng trống hay không , nếu trống tạo giỏ hàng mới
                    if (!isset($gio_hang) || empty($gio_hang)) {
                        $id_gio_hang = insert_giohang($id_user, $ngay_tao_gh);
                    }

                    //thêm sản phẩm vào giỏ hàng
                    insert_chitiet_giohang($gio_hang[0]["id_gio_hang"], $id_ctsp, $so_luong);

                } else {
                    $thongbao = "Vui lòng đăng nhập";
                }
            }
            $load_chitiet_giohang = load_chitiet_giohang();
            include('view/cart/cart.php');
            break;
        
        case 'xoa_sp_gh':
            if (isset($_GET["id_chitiet_gh"]) && $_GET["id_chitiet_gh"] > 0) {
                $id = $_GET["id_chitiet_gh"];
                xoa_sp_giohang($id);
            }
            $gio_hang = gio_hang();
            $load_chitiet_giohang = load_chitiet_giohang();
            include('view/cart/cart.php');
            break;
        case 'xoa_giohang':
            if(isset($_SESSION["user"])){
                $id_user = $_SESSION["user"]["id_user"];
                $ngay_tao_gh = date("Y-m-d H:i:s");
                xoa_giohang();
                $gio_hang = gio_hang();
                if(empty($gio_hang)){
                    $thongbao = "Giỏ hàng trống !";
                    //sau khi xóa tạo giỏ hàng mới để người dùng thêm sản phẩm vào
                    insert_giohang($id_user, $ngay_tao_gh);
                }
            }
            $load_chitiet_giohang = load_chitiet_giohang();
            include('view/cart/cart.php');
            break;

        // ĐƠN HÀNG

        case 'don_hang':
            if(isset($_SESSION["user"])){
                $id_user = $_SESSION["user"]["id_user"];
                $ngay_dat_hang = date("Y-m-d H:i:s");
                insert_donhang($id_user,$ngay_dat_hang);
            }
            //$loadall_gio_hang = loadall_gio_hang();
            $load_trangthai = load_trangthai();
            $load_pttt = load_pttt();
            $loadall_donhang = loadall_donhang();
            $load_chitiet_giohang = load_chitiet_giohang();
            $loadall_chitiet_donhang = loadall_chitiet_donhang();
            include("view/cart/don_hang.php");
            break;
        
        case 'xac_nhan_don_hang':
            if (isset($_POST["xac_nhan_dh"]) && $_POST["xac_nhan_dh"]) {
                $id_don_hang = $_POST["id_don_hang"];
                $id_ctsp = $_POST["id_ctsp"];
                $id_user = $_SESSION["user"]["id_user"];
                $id_chitiet_gh = $_POST["id_chitiet_gh"];
                $tong_tien = $_POST["tong_tien"];
                $id_pttt = $_POST["id_pttt"];
                $id_trangthai = 1;
                insert_chitiet_donhang($id_chitiet_gh,$id_don_hang,$tong_tien,$id_pttt,$id_trangthai);
                insert_lichsu_mua($id_ctsp,$id_user);
                $thongbao = "Khởi tạo đơn hàng thành công";
            }
            $loadall_donhang = loadall_donhang();
            $load_trangthai = load_trangthai();
            $load_pttt = load_pttt();
            $load_chitiet_giohang = load_chitiet_giohang();
            $loadall_chitiet_donhang = loadall_chitiet_donhang();
            include("view/cart/don_hang.php");
            break;
        
        case 'xem_chitiet_dh':
            if (isset($_GET["id_chitiet_donhang"])) {
                $id_chitiet_donhang = $_GET["id_chitiet_donhang"];
                $loadone_thongtin_donhang = loadone_thongtin_donhang($id_chitiet_donhang);
                $load_lichsu_mua = load_lichsu_mua(); 
            }
            include("view/cart/xem_chitiet_dh.php");
            break;
        case 'huy_don':
            if(isset($_GET["id_chitiet_donhang"])){
                $id_chitiet_donhang = $_GET["id_chitiet_donhang"];
                huy_don($id_chitiet_donhang);
                xoa_lichsu_mua();
            }
            include('view/account/my-account.php');
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