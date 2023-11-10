<?php
function insert_sanpham($tensp, $giasp, $hinh, $mota, $id_dm)
{
    $sql = " INSERT INTO san_pham(ten_sp,gia,hinh_anh,mo_ta,id_dm) VALUES('$tensp','$giasp','$hinh','$mota','$id_dm')";
    pdo_execute($sql);
}

function loadall_sanpham($kewword = " ", $id_dm = 0)
{
    $sql = "SELECT * FROM san_pham WHERE 1";
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
function loadall_sanpham_home()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY id DESC";
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY luot_xem DESC limit 0,10";
    $list_sp = pdo_query($sql);
    return $list_sp;
}
function loadone_sanpham($id)
{
    $sql = "SELECT * FROM san_pham WHERE id='$id'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
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
function load_sanpham_cungloai($id,$id_danh_muc)
{
    $sql = "SELECT * FROM san_pham WHERE id_danh_muc='$id_danh_muc' AND id !='$id'";
    $list_sp = pdo_query($sql);
    return $list_sp;
}
function delete_sanpham($id)
{
    $sql = "DELETE FROM san_pham WHERE id=" . $id;
    pdo_execute($sql);
}
function update_sp($id,$id_danh_muc, $tensp, $giasp, $mota, $filename)
{
    if ($filename =="") {
        $sql = " UPDATE san_pham SET id_danh_muc='$id_danh_muc',ten_sp='$tensp',gia='$giasp',mo_ta='$mota' WHERE id = '$id' ";
    } else {
        $sql = " UPDATE san_pham SET id_danh_muc='$id_danh_muc',ten_sp='$tensp',gia='$giasp',hinh_anh='$filename' , mo_ta='$mota' WHERE id = '$id' ";
    }
    // echo $sql;die;
    pdo_execute($sql);
}
?>