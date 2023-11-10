<?php
include "giaodien/header.php";
include "../database/pdo.php";
include "../database/dao/danhmuc.php";
include "../database/dao/sanpham.php";
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    switch ($act) {
        // DANH MỤC //
        case 'list_dm':
            $list_dm = loadall_danhmuc();
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
            if(isset($_GET["id"])&&$_GET["id"]>0){
                delete_danhmuc($_GET["id"]);
            }
            $list_dm = loadall_danhmuc();
            include('./danhmuc/list_dm.php');
            break;
        case 'sua_dm':
            if(isset($_GET["id"])&&$_GET["id"]>0){
                $one_dm = loadone_danhmuc($_GET["id"]);
            }
            include('./danhmuc/update_dm.php');
            break;
        case 'update_dm':
            if(isset($_POST["update_dm"])&&$_POST["update_dm"]){
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
            include('./sanpham/list_sp.php');
            break;
            
        case 'add_sp':
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $id_danh_muc = $_POST["id_danh_muc"];
                $ten_sp = $_POST["ten_sp"];
                $gia = $_POST["gia"];
                $size = $_POST["size"];
                $mota = $_POST["mota"];
                $filename = $_FILES["hinh"]["name"];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($filename);
                
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    
                    echo "File" . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được up load.";
                    
                } else {
                    echo "Lỗi up load file.";
                }
                
                insert_sanpham($ten_sp, $gia, $filename, $mota, $id_dm);
            }
            $list_dm = loadall_danhmuc();
            include('./sanpham/add_sp.php');
            break;
        case 'update_sp':
            include('./sanpham/update_sp.php');
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