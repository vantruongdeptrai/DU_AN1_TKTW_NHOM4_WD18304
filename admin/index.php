<?php
include "giaodien/header.php";
include "../database/pdo.php";
include "../database/dao/danhmuc.php";
include "../database/dao/sanpham.php";
include "../database/dao/size.php";
include "../database/dao/chitietsanpham.php";
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
            $list_ctsanpham = loadall_chitietsanpham();
            include('./sanpham/list_sp.php');
            break;

        case 'add_sp':
            if (isset($_POST["them_sp"]) && $_POST["them_sp"]) {
                $id_dm = $_POST["id_dm"];
                $id_size = $_POST["id_size"];
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
                loadall_sanpham();
                insert_ctsanpham($id_sp,$id_size);
            }
            $list_dm = loadall_danhmuc();
            $list_size = loadall_size();
            $list_ctsanpham = loadall_chitietsanpham();
            include('./sanpham/add_sp.php');
            break;
        case 'sua_sp':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                $one_sp = loadone_sanpham($_GET["id"]);
            }
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            include('./sanpham/update_sp.php');
            break;
        case 'xoa_sp':
            if (isset($_GET["id"]) && $_GET["id"] > 0) {
                delete_sanpham($_GET["id"]);
            }
            $list_sp = loadall_sanpham("",0);
            $list_ctsanpham = loadall_chitietsanpham();
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            include('./sanpham/list_sp.php');
            break;
        case 'update_sp':
            if (isset($_POST["cap_nhat"]) && $_POST["cap_nhat"]) {
                $id_dm = $_POST["id_dm"];
                $id_sp = $_POST["id_sp"];
                $id_size = $_POST["id_size"];
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
                //update_sp($id_sp,$id_size,$id_dm, $ten_sp, $gia, $mota, $filename);
                update_ctsanpham($id_sp, $id_size, $id_dm, $ten_sp, $gia, $mota, $filename);
            }
            $list_sp = loadall_sanpham("",0);
            $list_size = loadall_size();
            $list_dm = loadall_danhmuc();
            $list_ctsanpham = loadall_chitietsanpham();
            include('./sanpham/list_sp.php');
            break;
        // TÀI KHOẢN //
        case 'list_tk':
            include('./taikhoan/list_tk.php');
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