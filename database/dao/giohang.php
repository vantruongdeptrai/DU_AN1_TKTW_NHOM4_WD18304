<?php
    // function insert_giohang($id_ctsp,$so_luong){
    //     $sql = "INSERT INTO gio_hang(id_ctsp,so_luong) VALUES ('$id_ctsp','$so_luong')";
    //     pdo_execute($sql);
    // }
    function insert_giohang($id_user,$ngay_tao_dh){
        $sql = "INSERT INTO gio_hang(id_user,ngay_tao_gh) VALUES('$id_user','$ngay_tao_dh')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function gio_hang(){
        $sql = "SELECT * FROM gio_hang";
        $load_giohang = pdo_query($sql);
        return $load_giohang;
    }
    function xoa_giohang(){
        $sql = "DELETE FROM gio_hang";
        pdo_execute($sql);
    }
    
?>