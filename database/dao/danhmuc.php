<?php
function insert_dm($tendm)
{
    $sql = " INSERT INTO danh_muc(ten_dm) VALUES('$tendm')";
    pdo_execute($sql);
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danh_muc WHERE trang_thai = 0";
    $list_dm = pdo_query($sql);
    //var_dump($list_dm);
    return $list_dm;
}
function loadall_danhmuc_home()
{
    $sql = "SELECT * FROM danh_muc WHERE trang_thai = 0 LIMIT 0,3 ";
    $list_dm = pdo_query($sql);
    //var_dump($list_dm);
    return $list_dm;
}
function countall_sanpham_danhmuc()
{
    $sql = "SELECT danh_muc.id_dm as 'iddm', COUNT(*) as 'soluong' FROM san_pham JOIN danh_muc WHERE danh_muc.id_dm = san_pham.id_dm GROUP BY san_pham.id_dm;";
    $count_sp_dm = pdo_query($sql);
    return $count_sp_dm;
}
function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danh_muc WHERE id_dm=".$id;
    $one_dm = pdo_query_one($sql);
    return $one_dm;
}
function delete_danhmuc($id)
{
    $sql = "UPDATE danh_muc SET trang_thai = '1' WHERE id_dm=". $id;
    pdo_execute($sql);
    //echo $sql;
}
function update_dm($id_dm, $ten_dm)
{
    $sql = " UPDATE danh_muc SET ten_dm='$ten_dm' WHERE id_dm = '$id_dm' ";
    pdo_execute($sql);
}
?>