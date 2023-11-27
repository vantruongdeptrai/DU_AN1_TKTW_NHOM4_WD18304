<?php
    function insert_donhang($id_gio_hang,$id_user,$tong_tien,$ngay_dat_hang,$id_pttt,$id_trangthai){
        $sql = "INSERT INTO don_hang(id_gio_hang,id_user,tong_tien,ngay_dat_hang,id_pttt,id_trangthai)
         VALUES ('$id_gio_hang','$id_user','$tong_tien','$ngay_dat_hang','$id_pttt','$id_trangthai')";
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql = "SELECT don_hang.id_don_hang , don_hang.id_gio_hang , don_hang.id_user , don_hang.tong_tien , don_hang.ngay_dat_hang , trang_thai.ten_trangthai , phuong_thuc_tt.ten_pttt FROM don_hang
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = don_hang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = don_hang.id_pttt";
        $load_donhang = pdo_query($sql);
        return $load_donhang;
    }
    function loadone_donhang($id_don_hang){
        $sql = "SELECT don_hang.id_don_hang , don_hang.id_gio_hang , don_hang.id_user , don_hang.tong_tien , don_hang.ngay_dat_hang , trang_thai.ten_trangthai , phuong_thuc_tt.ten_pttt FROM don_hang
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = don_hang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = don_hang.id_pttt WHERE don_hang.id_don_hang='$id_don_hang'";
        $loadone_donhang = pdo_query_one($sql);
        //var_dump($loadone_donhang);
        return $loadone_donhang;
    }
    function update_donhang($trang_thai){
        $sql = "UPDATE don_hang SET trang_thai='$trang_thai'";
        pdo_execute($sql);
    }
?>