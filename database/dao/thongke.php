<?php 
    function thongke_tien_ngay(){
        $sql = "SELECT DATE(don_hang.ngay_dat_hang) AS 'thongke_ngay', SUM(chi_tiet_donhang.tong_tien) AS 'tong_tien'
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON chi_tiet_donhang.id_don_hang = don_hang.id_don_hang
        GROUP BY DATE(don_hang.ngay_dat_hang)";
        $thongke_tien_ngay = pdo_query_one($sql);
        return $thongke_tien_ngay;
    }
    function thongke_tien_thang(){
        $sql = "SELECT DATE_FORMAT(don_hang.ngay_dat_hang, '%Y-%m') AS 'thongke_thang', SUM(chi_tiet_donhang.tong_tien) AS 'tong_tien'
        FROM chi_tiet_donhang
        LEFT JOIN don_hang ON chi_tiet_donhang.id_don_hang = don_hang.id_don_hang
        GROUP BY DATE_FORMAT(don_hang.ngay_dat_hang, '%Y-%m')";
        $thongke_tien_thang = pdo_query_one($sql);
        return $thongke_tien_thang;
    }
?>
