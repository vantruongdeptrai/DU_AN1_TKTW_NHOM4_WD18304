<?php
    function insert_lichsu_mua($id_ctsp,$id_user){
        $sql = "INSERT INTO lich_su_mua(id_ctsp,id_user) VALUES ('$id_ctsp','$id_user')";
        pdo_execute($sql);
    }
    function load_lichsu_mua(){
        $sql = "SELECT lich_su_mua.id_lichsu_mua , san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , size.ten_size , chi_tiet_sp.id_ctsp , nguoi_dung.user
        FROM lich_su_mua 
        LEFT JOIN chi_tiet_sp ON lich_su_mua.id_ctsp = chi_tiet_sp.id_ctsp
        LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
        LEFT JOIN nguoi_dung ON nguoi_dung.id_user = lich_su_mua.id_user";
        $lich_su_mua = pdo_query($sql);
        return $lich_su_mua;
    }
    function xoa_lichsu_mua(){
        $sql = "DELETE FROM lich_su_mua";
        pdo_execute($sql);
    }
?>