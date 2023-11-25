<?php

function tongtien()
{
    $tongtien = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tongtien += $thanhtien;
    }
    return $tongtien;
}
function insert_gio_hang($id_user,$id_ctsp,$so_luong,$tong_tien,$id_don_hang){
    $sql = "INSERT INTO gio_hang(id_user,id_ctsp,so_luong,tong_tien,id_don_hang)
        VALUES ('$id_user','$id_ctsp','$so_luong','$tong_tien','$id_don_hang')";
    pdo_execute($sql);
}
function loadall_gio_hang($id_don_hang){
    $sql = "SELECT * FROM don_hang WHERE id_don_hang=".$id_don_hang;
    $load_giohang = pdo_query($sql);
    return $load_giohang;
}
function insert_donhang($id_user, $ngay_dat_hang, $phuong_thuc_tt, $tong_tien)
{
    $sql = "INSERT INTO don_hang(id_user,ngay_dat_hang,phuong_thuc_tt,tong_tien)
        VALUES ('$id_user','$ngay_dat_hang','$phuong_thuc_tt','$tong_tien')";
    
    return pdo_execute_return_lastInsertId($sql);
}
function load_donhang()
{
    $sql = "SELECT * FROM don_hang";
    $load_donhang = pdo_query($sql);
    return $load_donhang;
    //var_dump($load_donhang);
}
function load_one_donhang($id_don_hang){
    $sql = "SELECT * FROM don_hang WHERE id_don_hang=".$id_don_hang;
    $load_donhang = pdo_query_one($sql);
    return $load_donhang;
}
?>