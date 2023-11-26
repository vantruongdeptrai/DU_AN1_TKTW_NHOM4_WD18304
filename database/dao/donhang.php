<?php
    function insert_donhang($id_gio_hang,$id_user,$tong_tien,$phuong_thuc_tt,$ngay_dat_hang){
        $sql = "INSERT INTO don_hang(id_gio_hang,id_user,tong_tien,phuong_thuc_tt,ngay_dat_hang)
         VALUES ('$id_gio_hang','$id_user','$tong_tien','$phuong_thuc_tt','$ngay_dat_hang')";
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql = "SELECT * FROM don_hang";
        $load_donhang = pdo_query($sql);
        return $load_donhang;
    }
?>