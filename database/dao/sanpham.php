<?php
function insert_sanpham($tensp, $giasp, $hinh, $mota, $id_dm)
{
    $sql = " INSERT INTO san_pham(ten_sp,gia,hinh_anh,mo_ta,id_dm) VALUES('$tensp','$giasp','$hinh','$mota','$id_dm')";
    pdo_execute($sql);
}

function loadall_sanpham($kewword = " ", $id_dm = 0)
{
    $sql = "SELECT * FROM san_pham WHERE trang_thai = 0";
    if ($kewword != "") {
        $sql .= " and ten_sp like '%" . $kewword . "%'";
    }
    if ($id_dm > 0) {
        $sql .= " and id_dm ='" . $id_dm . "'";
    }
    $sql .= " ORDER BY id_sp desc";
    $list_sp = pdo_query($sql);
    return $list_sp;
}
function loadone_sanpham($id_sp)
{
    $sql = "SELECT * FROM san_pham WHERE id_sp='$id_sp' ";
    $one_sp = pdo_query_one($sql);
    return $one_sp;
}
function loadall_sanpham_home()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id_sp DESC LIMIT 0,4";
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY luot_xem DESC limit 0,10";
    $list_sp = pdo_query($sql);
    return $list_sp;
}
function loadall_sanpham_gia(){
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY gia DESC limit 0,10";
    $list_sp = pdo_query($sql);
    return $list_sp;
}
function loadall_sanpham_size($id_size){
    if($id_size>0){
        $sql = "SELECT * FROM san_pham WHERE id_size='$id_size'";
        $size = pdo_query_one($sql);
        extract($size);
        return $ten_size;
    }else{
        return "";
    }
}
function load_ten_dm($id_danh_muc)
{
    if($id_danh_muc >0){
        $sql = "SELECT * FROM danh_muc WHERE id_danh_muc='$id_danh_muc'";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_danh_muc;
    }else{
        return "";
    }
}
function load_sanpham_cungloai($id_sp,$id_dm)
{
    $sql = "SELECT * FROM san_pham WHERE id_dm='$id_dm' AND id_sp !='$id_sp'";
    $list_sp = pdo_query($sql);
    return $list_sp;
}
function delete_sanpham($id_sp)
{
    $sql = "UPDATE san_pham SET trang_thai = 1 WHERE id_sp=" . $id_sp;
    pdo_execute($sql);
}
function update_sp($id_sp,$id_dm, $ten_sp, $gia_sp, $mota, $filename)
{
    if ($filename =="") {
        $sql = " UPDATE san_pham SET id_dm='$id_dm',ten_sp='$ten_sp',gia='$gia_sp',mo_ta='$mota' WHERE id_sp = '$id_sp' ";
    } else {
        $sql = " UPDATE san_pham SET id_dm='$id_dm',ten_sp='$ten_sp',gia='$gia_sp',hinh_anh='$filename' , mo_ta='$mota' WHERE id_sp = '$id_sp' ";
    }
    // echo $sql;die;
    pdo_execute($sql);
}
?>