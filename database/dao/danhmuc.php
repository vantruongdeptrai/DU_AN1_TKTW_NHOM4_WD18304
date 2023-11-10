<?php
function insert_dm($tendm)
{
    $sql = " INSERT INTO danh_muc(ten_dm) VALUES('$tendm')";
    pdo_execute($sql);
    //echo $sql;
}
function loadall_danhmuc()
{
    $sql = "SELECT * FROM danh_muc";
    $list_dm = pdo_query($sql);
    return $list_dm;
}

function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM danh_muc WHERE id_dm=".$id;
    $one_dm = pdo_query_one($sql);
    return $one_dm;
}
function delete_danhmuc($id)
{
    $sql = "DELETE FROM danh_muc WHERE id_dm=" . $id;
    pdo_execute($sql);
}
function update_dm($id_dm, $ten_dm)
{
    $sql = " UPDATE danh_muc SET ten_dm='$ten_dm' WHERE id_dm = '$id_dm' ";
    pdo_execute($sql);
}
?>