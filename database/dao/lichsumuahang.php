<?php
    function insert_lichsu_mua($id_ctsp,$id_user,$id_don_hang,$so_luong){
        $sql = "INSERT INTO lich_su_mua(id_ctsp,id_user,id_don_hang,so_luong) VALUES ('$id_ctsp','$id_user','$id_don_hang','$so_luong')";
        //echo $sql;
        pdo_execute($sql);
    }
    function load_lichsu_mua($id_user,$id_don_hang){
        $sql = "SELECT lich_su_mua.id_don_hang , lich_su_mua.so_luong,lich_su_mua.id_lichsu_mua , san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , size.ten_size , chi_tiet_sp.id_ctsp , nguoi_dung.user
        FROM lich_su_mua 
        LEFT JOIN chi_tiet_sp ON lich_su_mua.id_ctsp = chi_tiet_sp.id_ctsp
        LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
        LEFT JOIN nguoi_dung ON nguoi_dung.id_user = lich_su_mua.id_user WHERE nguoi_dung.id_user = '$id_user' AND lich_su_mua.id_don_hang='$id_don_hang'";
        $lich_su_mua = pdo_query($sql);
        //var_dump($lich_su_mua);
        return $lich_su_mua;
    }
    function xoa_lichsu_mua(){
        $sql = "DELETE FROM lich_su_mua";
        pdo_execute($sql);
    }
?>