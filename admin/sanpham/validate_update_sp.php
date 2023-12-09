<?php
include("../../database/pdo.php");
$ten_sp = isset($_POST["ten_sp"]) ? $_POST["ten_sp"] : false;
$gia = isset($_POST["gia"]) ? $_POST["gia"] : false;
$mota = isset($_POST["mota"]) ? $_POST["mota"] : false;
$id_dm = isset($_POST["id_dm"]) ? $_POST["id_dm"] : false;
$id_sp = isset($_POST["id_sp"]) ? $_POST["id_sp"] : false;
$hinh_anh = isset($_POST["hinh_anh"]) ? $_POST["hinh_anh"] : false;

if (!$ten_sp || !$gia || !$mota || !$id_sp) {
    die('{error:"bad_request"}');
}
//bien luu loi
$error = array(
    'error' => 'cập nhật thành công',
    'ten_sp' => '',
    'gia' => '',
    'mota' => '',
    'hinh_anh' => '',
    'id_sp' => '',
    'id_dm' => ''
);

    if ($hinh_anh == "") {
        $sql = " UPDATE san_pham SET id_dm='$id_dm',ten_sp='$ten_sp',gia='$gia',mo_ta='$mota' WHERE id_sp = '$id_sp' ";
    } else {
        $sql = " UPDATE san_pham SET id_dm='$id_dm',ten_sp='$ten_sp',gia='$gia',hinh_anh='$hinh_anh' , mo_ta='$mota' WHERE id_sp = '$id_sp' ";
    }
    pdo_execute($sql);
    echo $sql;
    echo $error['error'];


// Trả kết quả về cho client

?>