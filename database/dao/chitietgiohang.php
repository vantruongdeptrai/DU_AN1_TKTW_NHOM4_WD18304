<?php
    function insert_chitiet_giohang($id_gio_hang,$id_ctsp,$so_luong){
        $sql = "INSERT INTO chi_tiet_giohang(id_gio_hang,id_ctsp,so_luong) VALUES ('$id_gio_hang','$id_ctsp','$so_luong')";
        pdo_execute($sql);
    }
    function load_chitiet_giohang(){
        $sql = "SELECT chi_tiet_giohang.id_chitiet_gh ,chi_tiet_giohang.so_luong,san_pham.ten_sp , san_pham.gia , san_pham.hinh_anh , chi_tiet_sp.id_ctsp , size.ten_size , gio_hang.id_gio_hang
        FROM chi_tiet_giohang 
        LEFT JOIN chi_tiet_sp ON chi_tiet_sp.id_ctsp = chi_tiet_giohang.id_ctsp
        LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
        LEFT JOIN gio_hang ON gio_hang.id_gio_hang = chi_tiet_giohang.id_gio_hang";
        $load_chitiet_giohang = pdo_query($sql);
        return $load_chitiet_giohang;
    }
    function xoa_sp_giohang($id_chitiet_gh){
        $sql = "DELETE FROM chi_tiet_giohang WHERE id_chitiet_gh = '$id_chitiet_gh'";
        pdo_execute($sql);
    }
    function xoa_ctgh(){
        $sql = "DELETE FROM chi_tiet_giohang";
        pdo_execute($sql);
    }

?>