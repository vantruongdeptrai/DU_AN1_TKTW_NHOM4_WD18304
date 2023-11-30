<?php 
    function insert_chitiet_donhang($id_gio_hang,$id_don_hang,$tong_tien,$id_pttt,$id_trangthai,$ngay_dat_hang){
        $sql = "INSERT INTO chi_tiet_donhang(id_gio_hang,id_don_hang,tong_tien,id_trangthai,id_pttt,ngay_dat_hang)
         VALUES ('$id_gio_hang','$id_don_hang','$tong_tien','$id_pttt','$id_trangthai','$ngay_dat_hang')";
         pdo_execute($sql);
    }
    function loadall_chitiet_donhang(){
        $sql = "SELECT don_hang.id_user , gio_hang.so_luong , chi_tiet_donhang.tong_tien , trang_thai.ten_trangthai,trang_thai.id_trangthai,chi_tiet_donhang.id_pttt, chi_tiet_donhang.ngay_dat_hang , chi_tiet_donhang.id_don_hang ,chi_tiet_donhang.id_gio_hang
        FROM don_hang LEFT JOIN chi_tiet_donhang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang
        LEFT JOIN gio_hang ON gio_hang.id_gio_hang = chi_tiet_donhang.id_gio_hang
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai";
        $loadall_ctdh = pdo_query($sql);
        return $loadall_ctdh;
    }
    function update_chitiet_donhang($id_don_hang,$id_trangthai){
        $sql = "UPDATE chi_tiet_donhang SET id_trangthai = '$id_trangthai' WHERE id_don_hang='$id_don_hang'";
        pdo_execute($sql);
    }
    function load_thongtin_donhang(){
        $sql = "SELECT nguoi_dung.user , chi_tiet_donhang.tong_tien , chi_tiet_donhang.ngay_dat_hang , trang_thai.ten_trangthai , phuong_thuc_tt.ten_pttt , don_hang.id_don_hang FROM chi_tiet_donhang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang 
        LEFT JOIN nguoi_dung ON nguoi_dung.id_user = don_hang.id_user
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = chi_tiet_donhang.id_pttt";
        $load_thongtin_donhang = pdo_query($sql);
        return $load_thongtin_donhang;
    }
    function loadone_thongtin_donhang($id_don_hang){
        $sql = "SELECT gio_hang.so_luong,nguoi_dung.user , chi_tiet_donhang.tong_tien , chi_tiet_donhang.ngay_dat_hang , trang_thai.ten_trangthai , phuong_thuc_tt.ten_pttt , don_hang.id_don_hang FROM chi_tiet_donhang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang 
        LEFT JOIN nguoi_dung ON nguoi_dung.id_user = don_hang.id_user
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = chi_tiet_donhang.id_pttt
        LEFT JOIN gio_hang ON gio_hang.id_gio_hang = chi_tiet_donhang.id_gio_hang WHERE don_hang.id_don_hang =".$id_don_hang;
        $loadone_thongtin_donhang = pdo_query_one($sql);
        return $loadone_thongtin_donhang;
    }
    function load_donhang_iduser($id_user){
        $sql = "SELECT nguoi_dung.user , chi_tiet_donhang.tong_tien , chi_tiet_donhang.ngay_dat_hang , trang_thai.ten_trangthai ,trang_thai.id_trangthai , phuong_thuc_tt.ten_pttt , don_hang.id_don_hang FROM chi_tiet_donhang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang 
        LEFT JOIN nguoi_dung ON nguoi_dung.id_user = don_hang.id_user
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = chi_tiet_donhang.id_pttt WHERE nguoi_dung.id_user=".$id_user;
        $load_donhang_iduser = pdo_query($sql);
        return $load_donhang_iduser;
    }
?>