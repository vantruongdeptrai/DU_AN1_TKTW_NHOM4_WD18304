<?php 
    function insert_chitiet_donhang($id_chitiet_gh,$id_don_hang,$tong_tien,$id_pttt,$id_trangthai){
        $sql = "INSERT INTO chi_tiet_donhang(id_chitiet_gh,id_don_hang,tong_tien,id_trangthai,id_pttt)
         VALUES ('$id_chitiet_gh','$id_don_hang','$tong_tien','$id_pttt','$id_trangthai')";
         pdo_execute($sql);
    }
    function loadall_chitiet_donhang(){
        $sql = "SELECT chi_tiet_donhang.id_chitiet_donhang,phuong_thuc_tt.ten_pttt,chi_tiet_giohang.id_chitiet_gh ,nguoi_dung.user, don_hang.id_user , chi_tiet_giohang.so_luong , chi_tiet_donhang.tong_tien , trang_thai.ten_trangthai,trang_thai.id_trangthai,chi_tiet_donhang.id_pttt, don_hang.ngay_dat_hang , don_hang.id_don_hang ,chi_tiet_giohang.id_chitiet_gh
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang
        LEFT JOIN chi_tiet_giohang ON chi_tiet_giohang.id_chitiet_gh = chi_tiet_donhang.id_chitiet_gh
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = chi_tiet_donhang.id_pttt
        LEFT JOIN nguoi_dung ON don_hang.id_user = nguoi_dung.id_user";
        $loadall_ctdh = pdo_query($sql);
        return $loadall_ctdh;
    }
    function update_chitiet_donhang($id_chitiet_donhang,$id_trangthai){
        $sql = "UPDATE chi_tiet_donhang SET id_trangthai = '$id_trangthai' WHERE id_chitiet_donhang='$id_chitiet_donhang'";
        pdo_execute($sql);
    }
    function loadone_thongtin_donhang($id_chitiet_donhang){
        $sql = "SELECT don_hang.id_don_hang,nguoi_dung.user , chi_tiet_donhang.id_chitiet_donhang,phuong_thuc_tt.ten_pttt,chi_tiet_giohang.id_chitiet_gh ,nguoi_dung.user, don_hang.id_user , chi_tiet_giohang.so_luong , chi_tiet_donhang.tong_tien , trang_thai.ten_trangthai,trang_thai.id_trangthai,chi_tiet_donhang.id_pttt, don_hang.ngay_dat_hang , don_hang.id_don_hang ,chi_tiet_giohang.id_chitiet_gh
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang
        LEFT JOIN chi_tiet_giohang ON chi_tiet_giohang.id_chitiet_gh = chi_tiet_donhang.id_chitiet_gh
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = chi_tiet_donhang.id_pttt
        LEFT JOIN nguoi_dung ON don_hang.id_user = nguoi_dung.id_user WHERE chi_tiet_donhang.id_chitiet_donhang =".$id_chitiet_donhang;
        $loadone_thongtin_donhang = pdo_query_one($sql);
        return $loadone_thongtin_donhang;
    }
    function load_donhang_iduser($id_user){
        $sql = "SELECT chi_tiet_giohang.id_chitiet_gh, don_hang.id_don_hang,chi_tiet_donhang.id_chitiet_donhang , don_hang.id_user , chi_tiet_giohang.so_luong , chi_tiet_donhang.tong_tien , trang_thai.ten_trangthai,trang_thai.id_trangthai,chi_tiet_donhang.id_pttt, don_hang.ngay_dat_hang , don_hang.id_don_hang ,chi_tiet_giohang.id_chitiet_gh
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang
        LEFT JOIN chi_tiet_giohang ON chi_tiet_giohang.id_chitiet_gh = chi_tiet_donhang.id_chitiet_gh
        LEFT JOIN trang_thai ON trang_thai.id_trangthai = chi_tiet_donhang.id_trangthai
        LEFT JOIN phuong_thuc_tt ON phuong_thuc_tt.id_pttt = chi_tiet_donhang.id_pttt
        LEFT JOIN nguoi_dung ON nguoi_dung.id_user = don_hang.id_user WHERE nguoi_dung.id_user=".$id_user;
        $load_donhang_iduser = pdo_query($sql);
        return $load_donhang_iduser;
    }
    function load_lichsu_muahang($id_chitiet_gh){
        $sql = "SELECT chi_tiet_donhang.id_chitiet_donhang,chi_tiet_giohang.id_chitiet_gh ,chi_tiet_giohang.so_luong,san_pham.ten_sp , san_pham.gia , san_pham.hinh_anh , chi_tiet_sp.id_ctsp , size.ten_size , gio_hang.id_gio_hang
        FROM chi_tiet_donhang 
        LEFT JOIN chi_tiet_giohang ON chi_tiet_donhang.id_chitiet_gh = chi_tiet_giohang.id_chitiet_gh
        LEFT JOIN chi_tiet_sp ON chi_tiet_sp.id_ctsp = chi_tiet_giohang.id_ctsp
        LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
        LEFT JOIN gio_hang ON gio_hang.id_gio_hang = chi_tiet_giohang.id_gio_hang
        LEFT JOIN don_hang ON don_hang.id_don_hang = chi_tiet_donhang.id_don_hang 
        WHERE chi_tiet_giohang.id_chitiet_gh = '$id_chitiet_gh'";
        $load_lichsu_muahang = pdo_query($sql);
        return $load_lichsu_muahang;
    }
?>