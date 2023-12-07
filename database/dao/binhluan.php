<?php
    
function insert_bl($noidung, $id_user, $id_sp, $ngaybl) { 
    $sql = "INSERT INTO binh_luan(noi_dung, id_user, id_sp, ngay_binh_luan) values ('$noidung', '$id_user', '$id_sp', '$ngaybl')";
    pdo_execute($sql);
}
function loadbl_ngdung_sanpham($id_sp){
    $sql ="SELECT binh_luan.id_bl,binh_luan.noi_dung ,binh_luan.trang_thai , binh_luan.ngay_binh_luan , san_pham.ten_sp , san_pham.id_sp, san_pham.hinh_anh , nguoi_dung.user
    FROM binh_luan LEFT JOIN nguoi_dung ON nguoi_dung.id_user = binh_luan.id_user
    LEFT JOIN san_pham ON san_pham.id_sp = binh_luan.id_sp WHERE binh_luan.trang_thai = 0";
    if($id_sp > 0 ){
        $sql .=" AND san_pham.id_sp='".$id_sp."'";
    }
    else{
        $sql .=" ORDER BY binh_luan.id_bl desc ";
    }
    $loadbl = pdo_query($sql);
    //var_dump($loadbl);
    return $loadbl;
}
function xoa_bl($id) { 
    $sql = "UPDATE binh_luan SET trang_thai = 1 WHERE id_bl=" .$id;
    pdo_execute($sql);
} 
?>

