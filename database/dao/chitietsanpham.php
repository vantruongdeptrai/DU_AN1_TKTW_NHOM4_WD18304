<?php
function insert_ctsp($id_sp,$id_size,$so_luong){
    $sql = "INSERT INTO chi_tiet_sp(id_sp,id_size,so_luong) VALUES ('$id_sp','$id_size','$so_luong')";
    pdo_execute($sql);
}
function load_ctsp($kewword = " ",$id_dm = 0){
    $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong ,chi_tiet_sp.trang_thai, san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE chi_tiet_sp.trang_thai = 0";
    if($id_dm>0){
        $sql .= " AND danh_muc.id_dm = '$id_dm' AND chi_tiet_sp.trang_thai = 0";
    }
    if ($kewword != "") {
        $sql .= " AND san_pham.ten_sp like '%" . $kewword . "%'";
    }
    $list_ctsp = pdo_query($sql);
    //var_dump($list_ctsp);
    return $list_ctsp;
}
function load_ctsp_home($kewword = " ",$id_dm = 0){
    $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong ,chi_tiet_sp.trang_thai, san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE chi_tiet_sp.trang_thai = 0 LIMIT 0,3";
    
    $list_ctsp = pdo_query($sql);
    //var_dump($list_ctsp);
    return $list_ctsp;
}
function load_ctsp_sp($id){
    $sql = "SELECT danh_muc.id_dm , chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE san_pham.id_sp = '$id'";
    $list_ctsp_danhmuc = pdo_query($sql);
    return $list_ctsp_danhmuc;
}
function update_ctsp($id_ctsp,$id_sp,$id_size,$so_luong){
    $sql = "UPDATE chi_tiet_sp SET id_sp = '$id_sp' , id_size = '$id_size' , so_luong = '$so_luong' WHERE id_ctsp = '$id_ctsp'";
    pdo_execute($sql);
    
}

function load_one_ctsp($id){
    $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE chi_tiet_sp.id_ctsp = '$id';
    ";
    $one_ctsp = pdo_query_one($sql);
    //var_dump($one_ctsp);
    return $one_ctsp;
}
function load_ctsp_cungloai($id_dm){
    $sql = "SELECT danh_muc.id_dm , chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE danh_muc.id_dm = '$id_dm' AND chi_tiet_sp.trang_thai = 0 LIMIT 0,3";
    $list_ctsp_danhmuc = pdo_query($sql);
    return $list_ctsp_danhmuc;
}
function delete_ctsp($id_ctsp){
    $sql = "UPDATE chi_tiet_sp SET trang_thai = 1 WHERE id_ctsp =".$id_ctsp;
    pdo_execute($sql);
}
function update_soluong_ctsp($so_luong,$id_ctsp){
    $sql = "UPDATE chi_tiet_sp SET so_luong = '$so_luong' WHERE id_ctsp = '$id_ctsp'";
    pdo_execute($sql);
}
function lay_soluong($id_ctsp){
    $sql = "SELECT so_luong FROM chi_tiet_sp WHERE id_ctsp= '$id_ctsp'";
    $lay_soluong = pdo_query_one($sql);
    return $lay_soluong;
}
?>