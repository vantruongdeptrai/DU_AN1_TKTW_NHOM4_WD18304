<?php

function load_lichsu_mua($id_chitiet_donhang)
{
    // $sql = "SELECT lich_su_mua.id_don_hang , lich_su_mua.so_luong,lich_su_mua.id_lichsu_mua , san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , size.ten_size , chi_tiet_sp.id_ctsp , nguoi_dung.user
    // FROM lich_su_mua 
    // LEFT JOIN chi_tiet_sp ON lich_su_mua.id_ctsp = chi_tiet_sp.id_ctsp
    // LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
    // LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    // LEFT JOIN nguoi_dung ON nguoi_dung.id_user = lich_su_mua.id_user WHERE nguoi_dung.id_user = '$id_user' AND lich_su_mua.id_don_hang='$id_don_hang'";

    $sql = "SELECT chi_tiet_giohang.id_chitiet_donhang , chi_tiet_giohang.id_ctsp , chi_tiet_giohang.id_gio_hang,chi_tiet_giohang.so_luong , san_pham.ten_sp,san_pham.gia,san_pham.hinh_anh ,size.ten_size  FROM chi_tiet_giohang 
    LEFT JOIN chi_tiet_donhang ON chi_tiet_giohang.id_chitiet_gh = chi_tiet_donhang.id_chitiet_gh
    LEFT JOIN chi_tiet_sp ON chi_tiet_sp.id_ctsp = chi_tiet_giohang.id_ctsp
    LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size WHERE chi_tiet_giohang.id_chitiet_donhang = '$id_chitiet_donhang'";

    $lich_su_mua = pdo_query($sql);
    //var_dump($lich_su_mua);
    return $lich_su_mua;
}

?>