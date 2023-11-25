<?php
    function insert_giohang($id_ctsp,$so_luong){
        $sql = "INSERT INTO gio_hang(id_ctsp,so_luong) VALUES ('$id_ctsp','$so_luong')";
        pdo_execute($sql);
    }
    function loadall_gio_hang(){
        $sql = "SELECT gio_hang.id_gio_hang , chi_tiet_sp.id_ctsp , san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh ,size.ten_size
        FROM gio_hang
        LEFT JOIN chi_tiet_sp ON gio_hang.id_ctsp = chi_tiet_sp.id_ctsp
        LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size";
        $loadall_gio_hang = pdo_query($sql);
        //var_dump($loadall_gio_hang);
        return $loadall_gio_hang;
    }
    function loadone_giohang($id_gio_hang){
        $sql = "SELECT gio_hang.id_gio_hang , chi_tiet_sp.id_ctsp , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh ,size.ten_size
        FROM san_pham
        LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN gio_hang ON gio_hang.id_ctsp = chi_tiet_sp.id_ctsp
        RIGHT JOIN size ON size.id_size = chi_tiet_sp.id_size WHERE gio_hang.id_gio_hang = '$id_gio_hang'";
        $loadone_giohang = pdo_query_one($sql);
        return $loadone_giohang;
    }
    function xoa_sp_giohang($id_gio_hang){
        $sql = "DELETE FROM gio_hang WHERE id_gio_hang = '$id_gio_hang'";
        pdo_execute($sql);
    }
?>