<?php

function load_lichsu_mua($id_chitiet_donhang)
{

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