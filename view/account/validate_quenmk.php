<?php
session_start();
include("../../database/pdo.php");
include("../../database/dao/nguoidung.php");
$email = isset($_POST["email"]) ? $_POST["email"] : false;
$error='';
if ($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Email không đúng định dạng';
        echo $error;
    }
}
if (!$error) {
    
    $check_email = check_email($email);
    //var_dump($check_email);
    if($check_email){
        $error = "Mật khẩu của bạn là : ".$check_email["password"];
        echo $error;
    }
    else{
        $error = "Email này không tồn tại";
        echo $error;
    }
    //echo $error['error'];
}
?>