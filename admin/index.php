<?php
include "giaodien/header.php";
include "../database/pdo.php";
include "../database/dao/danhmuc.php";
include "../database/dao/sanpham.php";
include "../database/dao/size.php";
include "../database/dao/chitietsanpham.php";
include "../database/dao/nguoidung.php";
include "../database/dao/binhluan.php";
include "../database/dao/chitietdonhang.php";
include "../database/dao/trangthai.php";
include "../database/dao/thongke.php";
include "../database/dao/chitietgiohang.php";
include "../database/dao/lichsumuahang.php";
include "../global.php";
$thongke_tien_ngay = thongke_tien_ngay();
$thongke_tien_thang = thongke_tien_thang();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        // DANH MỤC //
        case 'list_dm':
            $list_dm = loadall_danhmuc();
            $count_sp_dm = countall_sanpham_danhmuc();
            include('./danhmuc/list_dm.php');
            break;
        case 'add_dm':
            if (isset($_POST["them_dm"]) && $_POST["them_dm"]) {
                $ten_dm = $_POST["ten_dm"];
                insert_dm($ten_dm);
            }
            include('./danhmuc/add_dm.php');
            break;
        case 'xoa_dm':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                delete_danhmuc($_GET["id"]);
            }
            $list_dm = loadall_danhmuc();
            include('./danhmuc/list_dm.php');
            break;
        case 'sua_dm':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $one_dm = loadone_danhmuc($_GET["id"]);
            }
            include('./danhmuc/update_dm.php');
            break;
        case 'update_dm':
            if (isset($_POST["update_dm"]) && $_POST["update_dm"]) {
                $ten_dm = $_POST["ten_dm"];
                $id_dm = $_POST["id_dm"];
                update_dm($id_dm, $ten_dm);
            }
            $list_dm = loadall_danhmuc();
            include('./danhmuc/list_dm.php');
            break;

        // SẢN PHẨM //


        //them san pham

        case 'add_sp':
            if (isset($_POST["them_sp"]) && $_POST["them_sp"]) {
                $id_dm = $_POST["id_dm"];
                //$id_size = $_POST["id_size"];
                $ten_sp = $_POST["ten_sp"];
                $gia = $_POST["gia"];
                $mota = $_POST["mota"];
                $filename = $_FILES["hinh_anh"]["name"];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($filename);
                if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                    echo "File" . htmlspecialchars(basename($_FILES["hinh_anh"]["name"])) . " đã được up load.";
                } else {
                    echo "Lỗi up load file.";
                }
                insert_sanpham($ten_sp, $gia, $filename, $mota, $id_dm);
            }
            $list_sp = loadall_sanpham("", 0);
            $list_dm = loadall_danhmuc();
            $list_size = loadall_size();
            include('./sanpham/add_sp.php');
            break;

        // list sp 

        case 'list_sp':
            if (isset($_POST["ok"]) && $_POST["ok"]) {

                $keyword = $_POST["keyword"];
                $id_dm = $_POST["id_dm"];
            } else {
                $keyword = '';
                $id_dm = 0;
            }
            $list_dm = loadall_danhmuc();
            $list_sp = loadall_sanpham($keyword, $id_dm);
            $list_size = loadall_size();
            include('./sanpham/list_sp.php');
            break;

        // thêm sản phẩm chi tiết

        case 'them_ctsp':
            if (isset($_POST['id_sp']) && $_POST['id_sp'] && isset($_POST['id_size']) && $_POST['id_size'] && isset($_POST['so_luong']) && $_POST['so_luong']) {
                insert_ctsp($_POST['id_sp'], $_POST['id_size'], $_POST['so_luong']);
            }
            $list_sp = loadall_sanpham("", 0);
            $list_size = loadall_size();
            include('./sanpham/add_ctsp.php');
            break;

        //list sản phẩm chi tiết    

        case 'list_ctsp':
            $list_ctsp = load_ctsp();
            include('./sanpham/list_sp_chitiet.php');
            break;
        case 'xem_chitiet':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                $list_ctsp = load_ctsp_sp($id);
                //$list_chitietsp = load_ctsp("",0);
            }
            include('./sanpham/list_sp_chitiet.php');
            break;

        //xóa sản phẩm chi tiết  

        case 'xoa_spct':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $id = $_GET["id"];
                delete_ctsp($id);
                //$list_chitietsp = load_spct($id);
            }
            $list_ctsp = load_ctsp();
            include('./sanpham/list_sp_chitiet.php');
            break;

        //xóa sản phẩm

        case 'xoa_sp':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                delete_sanpham($_GET["id"]);
            }
            $list_sp = loadall_sanpham("", 0);
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            include('./sanpham/list_sp.php');
            break;

        //sửa sản phẩm 

        case 'sua_sp':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $one_sp = loadone_sanpham($_GET["id"]);

            }
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            include('./sanpham/update_sp.php');
            break;

        //sửa sản phẩm chi tiết

        case 'sua_spct':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $one_ctsp = load_one_ctsp($_GET["id"]);
            }
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            $list_ctsp = load_ctsp();
            include('./sanpham/update_spct.php');
            break;
        //cập nhật sản phẩm

        case 'update_sp':
            if (isset($_POST["cap_nhat"]) && $_POST["cap_nhat"]) {
                $id_dm = $_POST["id_dm"];
                $id_sp = $_POST["id_sp"];
                //$id_size = $_POST["id_size"];
                $ten_sp = $_POST["ten_sp"];
                $gia = $_POST["gia"];
                $mota = $_POST["mota"];
                $filename = $_FILES["hinh_anh"]["name"];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($filename);
                if (move_uploaded_file($_FILES["hinh_anh"]["tmp_name"], $target_file)) {
                    echo "File" . htmlspecialchars(basename($_FILES["hinh_anh"]["name"])) . " đã được up load.";
                } else {
                    //echo "Lỗi up load file.";
                }
                update_sp($id_sp, $id_dm, $ten_sp, $gia, $mota, $filename);
            }
            $list_sp = loadall_sanpham("", 0);
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            include('./sanpham/list_sp.php');
            break;

        // update sản phẩm chi tiết

        case 'update_spct':
            if (isset($_POST["cap_nhat_size"]) && $_POST["cap_nhat_size"]) {
                $id_sp = $_POST["id_sp"];
                $id_size = $_POST["id_size"];
                $id_ctsp = $_POST["id_ctsp"];
                $so_luong = $_POST["so_luong"];
                update_ctsp($id_ctsp, $id_sp, $id_size, $so_luong);  
            }

            //$one_ctsp = load_one_ctsp($id_ctsp);
            $list_ctsp = load_ctsp();
            $list_size = loadall_size();
            include('./sanpham/list_sp_chitiet.php');
            break;
        // TÀI KHOẢN //
        case 'list_tk':
            $list_tk = loadall_taikhoan();
            include('./taikhoan/list_tk.php');
            break;
        case 'xoa_tk':
            if (isset($_GET["id_user"]) && $_GET["id_user"]) {
                xoa_tk($_GET["id_user"]);
            }
            $list_tk = loadall_taikhoan();
            include('./taikhoan/list_tk.php');
            break;
        //BÌNH LUẬN

        case 'list_bl':
            $list_sp = loadall_sanpham();
            $list_tk = loadall_taikhoan();
            $loadbl = loadbl_ngdung_sanpham(0);
            include('./binhluan/list_bl.php');
            break;

        case 'xoa_bl':
            if (isset($_GET["id_bl"]) && $_GET["id_bl"]) {
                xoa_bl($_GET["id_bl"]);
            }
            $loadbl = loadbl_ngdung_sanpham(0);
            include('./binhluan/list_bl.php');
            break;
        // ĐƠN HÀNG

        case 'list_donhang':
            $loadall_chitiet_donhang = loadall_chitiet_donhang();
            include("./donhang/list_donhang.php");
            break;

        case 'sua_trangthai':
            if (isset($_GET["id_chitiet_donhang"]) && $_GET["id_chitiet_donhang"]) {
                $id_chitiet_donhang = $_GET["id_chitiet_donhang"];
                $loadone_thongtin_donhang = loadone_thongtin_donhang($id_chitiet_donhang);
            }
            $loadall_trangthai = load_trangthai();
            include "./donhang/capnhat_trangthai.php";
            break;
        case 'capnhat_trangthai':
            if (isset($_POST["capnhat_trangthai"]) && $_POST["capnhat_trangthai"]) {
                $id_chitiet_donhang = $_POST["id_chitiet_donhang"];
                $id_trangthai = $_POST["id_trangthai"];
                update_chitiet_donhang($id_chitiet_donhang, $id_trangthai);
            }
            $loadall_trangthai = load_trangthai();
            $loadall_chitiet_donhang = loadall_chitiet_donhang();

            include("./donhang/list_donhang.php");
            break;

        case 'lichsu_mua':
            if (isset($_GET["id_chitiet_donhang"]) && $_GET["id_chitiet_donhang"]) {
                $id_chitiet_donhang = $_GET["id_chitiet_donhang"];
                $load_lichsu_mua = load_lichsu_mua($id_chitiet_donhang);
            }
            include("./donhang/lichsu_mua.php");
            break;
        //THỐNG KÊ

        case 'thongke_tien_ngay':

            include "giaodien/main.php";
            break;
        default:
            include "giaodien/main.php";
            break;
    }
} else {
    include "giaodien/main.php";
}
include "giaodien/footer.php";
?>