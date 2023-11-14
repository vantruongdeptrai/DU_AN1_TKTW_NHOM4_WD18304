<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM nguoi_dung";
    $tk = pdo_query($sql);
    return $tk;
}
function loadone_taikhoan($id){
    $sql = "SELECT * FROM nguoi_dung WHERE id='$id'";
    $tk = pdo_query($sql);
    return $tk;
}
function insert_taikhoan($user, $password, $email)
{
    $sql = " INSERT INTO nguoi_dung(user,password,email) VALUES('$user','$password','$email')";
    pdo_execute($sql);
}
function check_user($user, $password)
{
    $sql = "SELECT * FROM nguoi_dung WHERE user='$user' AND password ='$password'";
    $sp = pdo_query_one($sql);
    //echo $sql;die;
    return $sp;
}
function check_email($email)
{
    $sql = "SELECT * FROM nguoi_dung WHERE email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$password,$email, $dia_chi, $sdt)
{
    $sql = " UPDATE nguoi_dung SET user='$user',password='$password', email='$email' , dia_chi='$dia_chi' , sdt='$sdt' WHERE id = '$id' ";
    //var_dump($sql);
    pdo_execute($sql);
}
function update_mk($id,$user,$newpass)
{
    $sql = " UPDATE nguoi_dung SET user='$user',password='$newpass' WHERE id = '$id' ";
    //var_dump($sql);
    pdo_execute($sql);
}
function loadone_tk($id){
    $sql = "SELECT * FROM nguoi_dung WHERE id='$id'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function delete_tk($id){
    $sql = "DELETE FROM nguoi_dung WHERE id='$id'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
?>