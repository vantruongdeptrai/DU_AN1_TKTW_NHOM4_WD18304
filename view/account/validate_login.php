<?php
session_start();
include("../../database/pdo.php");
include("../../database/dao/nguoidung.php");
$user = isset($_POST["user"]) ? $_POST["user"] : false;
$password = isset($_POST["password"]) ? $_POST["password"] : false;
// Khai báo biến lưu lỗi

if (!$user || !$password) {
    die('{error:"bad_request"}');
}
//bien luu loi
$error = array(
    'error' => 'Đăng nhập thành công',
    'user' => '',
    'password' => ''
);

if ($user) {
    $checkuser = check_user($user, $password);
    if (is_array($checkuser)) {
        $_SESSION["user"] = $checkuser;
        echo "<meta http-equiv='refresh' content='0;URL=index.php'/>";
    } else {
        echo $error['user']='Tài khoản không tồn tại , vui lòng kiểm tra hoặc đăng ký !';
    }
}


?>