<?php
function insert_ctsanpham($id_sp, $id_size)
{
    $sql = "INSERT INTO chi_tiet_sp(id_sp,id_size) SELECT '$id_sp', '$id_size' FROM san_pham , size";
    //var_dump($sql);
    pdo_execute($sql);
}
function loadall_chitietsanpham()
{
    $sql = "SELECT san_pham.id_sp as 'idsp_ct', san_pham.ten_sp as 'ten_sp', san_pham.gia as 'gia', san_pham.hinh_anh as 'hinh_anh', san_pham.mo_ta 'mo_ta',san_pham.luot_xem as 'luot_xem', size.ten_size 
        FROM san_pham LEFT join chi_tiet_sp ON chi_tiet_sp.id_sp = san_pham.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size";
    $list_chitietsp = pdo_query($sql);
   // var_dump($list_chitietsp);
    return $list_chitietsp;
}
function update_ctsanpham($id_sp, $id_size, $id_dm, $ten_sp, $gia_sp, $mota, $filename)
{
    if ($filename == "") {
        $sql = "UPDATE san_pham   
    LEFT JOIN 
    chi_tiet_sp
    ON san_pham.id_sp = chi_tiet_sp.id_sp 
    SET id_size='$id_size' ,id_dm='$id_dm',ten_sp='$ten_sp',gia='$gia_sp',mo_ta='$mota' WHERE san_pham.id_sp = '$id_sp'";
    } else {
        $sql = "UPDATE san_pham   
    LEFT JOIN 
    chi_tiet_sp  
    ON san_pham.id_sp = chi_tiet_sp.id_sp 
    SET id_size='$id_size' ,id_dm='$id_dm',ten_sp='$ten_sp',gia='$gia_sp',hinh_anh='$filename',mo_ta='$mota' WHERE san_pham.id_sp = '$id_sp'";
    }
    pdo_execute($sql);
}
function delete_ctsanpham($id_sp, $id_size){
    $sql = "DELETE FROM ";
    pdo_execute($sql);
}
?>