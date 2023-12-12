<?php
    function insert_chitiet_giohang($id_gio_hang,$id_ctsp,$so_luong){
        $sql = "INSERT INTO chi_tiet_giohang(id_gio_hang,id_ctsp,so_luong) VALUES ('$id_gio_hang','$id_ctsp','$so_luong')";
        pdo_execute($sql);
    }
    function load_chitiet_giohang(){
        $sql = "SELECT chi_tiet_giohang.trang_thai,chi_tiet_giohang.id_chitiet_gh ,chi_tiet_giohang.so_luong,san_pham.ten_sp , san_pham.gia , san_pham.hinh_anh , chi_tiet_sp.id_ctsp , size.ten_size , gio_hang.id_gio_hang
        FROM chi_tiet_giohang 
        LEFT JOIN chi_tiet_sp ON chi_tiet_sp.id_ctsp = chi_tiet_giohang.id_ctsp
        LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
        LEFT JOIN gio_hang ON gio_hang.id_gio_hang = chi_tiet_giohang.id_gio_hang WHERE chi_tiet_giohang.trang_thai = 0";
        $load_chitiet_giohang = pdo_query($sql);
        //var_dump($load_chitiet_giohang);
        return $load_chitiet_giohang;
    }
    function xoa_sp_giohang($id_chitiet_gh){
        $sql = "UPDATE chi_tiet_giohang SET trang_thai = 1 WHERE id_chitiet_gh = '$id_chitiet_gh'";
        pdo_execute($sql);
    }
    function xoa_ctgh(){
        $sql = "UPDATE chi_tiet_giohang SET trang_thai = 1";
        pdo_execute($sql);
    }
    function update_id_chitietdonhang($id_chitiet_donhang,$id_chitiet_gh){
        $sql = "UPDATE chi_tiet_giohang SET id_chitiet_donhang = '$id_chitiet_donhang' WHERE id_chitiet_gh = '$id_chitiet_gh'";
        pdo_execute($sql);
    }
?>