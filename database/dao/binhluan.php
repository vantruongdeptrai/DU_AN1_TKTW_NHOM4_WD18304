<?php
    
function insert_bl($noidung, $id_user, $id_sp, $ngaybl) { 
    $sql = "INSERT INTO binh_luan(noi_dung, id_user, id_sp, ngay_binh_luan) values ('$noidung', '$id_user', '$id_sp', '$ngaybl')";
    pdo_execute($sql);
}
function loadbl_ngdung_sanpham($id_sp){
    $sql ="SELECT * FROM binh_luan where 1";
    if($id_sp > 0 ){
        $sql .=" AND id_sp='".$id_sp."'";
    }
    else{
        $sql .=" ORDER BY id_bl desc ";
    }
    $loadbl = pdo_query($sql);
    //var_dump($loadbl);
    return $loadbl;
}
function xoa_bl($id) { 
    $sql = "DELETE FROM binh_luan WHERE id_bl=" .$id;
    pdo_execute($sql);
} 
?>

