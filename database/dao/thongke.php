<?php
function thongke_tien_ngay()
{
    $sql = "SELECT DATE(don_hang.ngay_dat_hang) AS 'thongke_ngay', SUM(chi_tiet_donhang.tong_tien) AS 'tong_tien'
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON chi_tiet_donhang.id_don_hang = don_hang.id_don_hang
        GROUP BY DATE(don_hang.ngay_dat_hang)";
    $thongke_tien_ngay = pdo_query_one($sql);
    return $thongke_tien_ngay;
}
function thongke_tien_thang()
{
    $sql = "SELECT DATE_FORMAT(don_hang.ngay_dat_hang, '%Y-%m') AS 'thongke_thang', SUM(chi_tiet_donhang.tong_tien) AS 'tong_tien'
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON chi_tiet_donhang.id_don_hang = don_hang.id_don_hang
        GROUP BY DATE_FORMAT(don_hang.ngay_dat_hang, '%Y-%m')";
    $thongke_tien_thang = pdo_query_one($sql);
    return $thongke_tien_thang;
}
function thongke_danhmuc_sl()
{
    $sql = "SELECT dm.id_dm,dm.ten_dm , COUNT(*) 'soluong', MIN(gia) 'gia_min', MAX(gia) 'gia_max', AVG(gia) 'gia_avg'
     FROM danh_muc dm JOIN san_pham sp ON dm.id_dm=sp.id_dm GROUP BY dm.id_dm, dm.ten_dm ORDER BY soluong DESC";
    return pdo_query($sql);
}
function thongke_sanpham_bienthe(){
    $sql = "SELECT SUM(chi_tiet_sp.so_luong) AS soluong, san_pham.id_sp , san_pham.ten_sp
    FROM chi_tiet_sp
    LEFT JOIN san_pham ON san_pham.id_sp = chi_tiet_sp.id_sp
    WHERE chi_tiet_sp.trang_thai = 0
    GROUP BY san_pham.id_sp , san_pham.ten_sp";
    return pdo_query($sql);
}
?>