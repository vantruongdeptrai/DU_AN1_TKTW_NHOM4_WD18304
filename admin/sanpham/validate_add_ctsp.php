<?php
include("../../database/pdo.php");
$so_luong = isset($_POST["so_luong"]) ? $_POST["so_luong"] : false;
$id_size = isset($_POST["id_size"]) ? $_POST["id_size"] : false;
$id_sp = isset($_POST["id_sp"]) ? $_POST["id_sp"] : false;
if (!$so_luong || !$id_size || !$id_sp) {
    die('{error:"bad_request"}');
}
//bien luu loi
$error = array(
    'error' => 'thêm thành công',
    '$so_luong' => '',
    '$id_size' => '',
    '$id_sp' => ''
);
if ($so_luong) {
    if(!preg_match('/^-?\d*\.?\d+$/', $so_luong)){
        $error['$so_luong'] = 'Nhập sai định dạng !';
    }
    if ($so_luong <= 0) {
        $error['$so_luong'] = 'Nhập sai định dạng !';
    }
}
if (!$error['$so_luong']) {
    $sql = "INSERT INTO chi_tiet_sp(id_sp,id_size,so_luong) VALUES ('$id_sp','$id_size','$so_luong')";
    pdo_execute($sql);
    //echo $sql;
    echo $error['error'];
} else {
    echo $error['$so_luong'];
}

// Trả kết quả về cho client

?>