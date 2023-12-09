<?php
include("../../database/pdo.php");
$so_luong = isset($_POST["so_luong"]) ? $_POST["so_luong"] : false;
$id_size = isset($_POST["id_size"]) ? $_POST["id_size"] : false;
$id_ctsp = isset($_POST["id_ctsp"]) ? $_POST["id_ctsp"] : false;
$id_sp = isset($_POST["id_sp"]) ? $_POST["id_sp"] : false;
if (!$so_luong || !$id_size || !$id_ctsp || !$id_sp) {
    die('{error:"bad_request"}');
}
//bien luu loi
$error = array(
    'error' => 'cập nhật thành công',
    '$so_luong' => '',
    '$id_size' => '',
    '$id_ctsp' => '',
    '$id_sp' => ''
);
if ($so_luong) {
    if (!filter_var($so_luong, FILTER_VALIDATE_INT) && $so_luong <= 0) {
        $error['$so_luong'] = 'Nhập sai định dạng !';
    }
}
if (!$error['$so_luong']) {
    $sql = "UPDATE chi_tiet_sp SET id_sp = '$id_sp' , id_size = '$id_size' , so_luong = '$so_luong' WHERE id_ctsp = '$id_ctsp'";
    pdo_execute($sql);

    //echo $sql;
    echo $error['error'];
} else {
    echo $error['$so_luong'];
}



// Trả kết quả về cho client

?>