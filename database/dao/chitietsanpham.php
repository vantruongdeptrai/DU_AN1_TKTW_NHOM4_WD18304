<?php
function insert_ctsp($id_sp,$id_size,$so_luong){
    $sql = "INSERT INTO chi_tiet_sp(id_sp,id_size,so_luong) VALUES ('$id_sp','$id_size','$so_luong')";
    pdo_execute($sql);
}
function load_ctsp(){
    $sql = "SELECT chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size;
    ";
    $list_ctsp = pdo_query($sql);
    //var_dump($list_ctsp);
    return $list_ctsp;
}
// function loadall_chitietsp($id)
// {
//     $sql = "SELECT * FROM san_pham left join size on size.id_sp = san_pham.id_sp WHERE id_size = ".$id;
//     $list_chitietsp = pdo_query_one($sql);
//    // var_dump($list_chitietsp);
//     return $list_chitietsp;
// }
// function loadall_chitietspsz($id)
// {
//     $sql = "SELECT s.ten_size, ct.id_chi_tiet_sp, ct.id_sp FROM `chi_tiet_sp` AS ct, size AS s WHERE ct.id_size = s.id_size AND ct.id_sp = ".$id;
//     $list_chitietsp = pdo_query($sql);
//    // var_dump($list_chitietsp);
//     return $list_chitietsp;
// }
function update_ctsp($id_ctsp,$id_sp,$id_size,$so_luong){
    $sql = "UPDATE chi_tiet_sp SET id_sp = '$id_sp' , id_size = '$id_size' , so_luong = '$so_luong' WHERE id_ctsp = '$id_ctsp'";
    pdo_execute($sql);
}

function load_one_ctsp($id){
    $sql = "SELECT chi_tiet_sp.id_ctsp , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size WHERE chi_tiet_sp.id_ctsp = '$id';
    ";
    $one_ctsp = pdo_query_one($sql);
    //var_dump($list_ctsp);
    return $one_ctsp;
}
function delete_ctsp($id_ctsp){
    $sql = "DELETE FROM chi_tiet_sp WHERE id_ctsp =".$id_ctsp;
    pdo_execute($sql);
}

?>