<?php
function insert_ctsanpham($id_sp, $id_size)
{
    $sql = "INSERT INTO chi_tiet_sp(id_sp,id_size) VALUES('$id_sp','$id_size')";
    pdo_execute($sql);
}
function loadall_chitietsanpham()
{
    $sql = "SELECT san_pham.id_sp as 'idsp_ct', san_pham.ten_sp , san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta ,san_pham.luot_xem , size.ten_size 
        FROM san_pham LEFT join chi_tiet_sp ON chi_tiet_sp.id_sp = san_pham.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size";

    $list_chitietsp = pdo_query($sql);
    return $list_chitietsp;
}
function update_ctsanpham($id_sp,$id_size){
    $sql = "UPDATE chi_tiet_sp SET id_sp='$id_sp',id_size='$id_size'";
    pdo_execute($sql);
}
?>