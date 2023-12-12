<?php
include("../../database/pdo.php");
    $user = isset($_POST["user"]) ? $_POST["user"] : false;
    $password = isset($_POST["password"]) ? $_POST["password"] : false;
    $email = isset($_POST["email"]) ? $_POST["email"] : false;
    // Khai báo biến lưu lỗi

    if (!$user || !$password) {
        die('{error:"bad_request"}');
    }
    //bien luu loi
    $error = array(
        'error' =>'Đăng kí thành công',
        'user' => '',
        'password' => '',
        'email' => ''
    );

    if ($user) {
        $sql = "SELECT COUNT(*) FROM nguoi_dung WHERE user = '$user'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['user'] = 'Tài khoản này đã tồn tại ! Vui lòng đăng kí tài khoản khác !';
        }
    }
    if ($user) {
        $regex = '/\s/';
        if (preg_match($regex,$user)) {
            $error['user'] = 'Tài khoản này chứa khoảng trắng ! Vui lòng đăng kí lại !';
        }
    }
    if ($user) {
        $regex = '/^[\p{L}\p{Mn}\s]+$/u';
        if (preg_match($regex,$user)) {
            $error['user'] = 'Tài khoản này chứa kí tự đặc biệt ! Vui lòng đăng kí lại !';
        }
    }
    if($email){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['email']='Email không đúng định dạng';
        }
    }
    if ($email) {
        $sql = "SELECT COUNT(*) FROM nguoi_dung WHERE email = '$email'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['email'] = 'Email này đã tồn tại ! Vui lòng đăng kí tài khoản khác !';
        }
    }
    if (!$error['user'] && !$error['email']){
        // Tiến hành lưu vào CSDL nếu không có lỗi
        $sql = "INSERT INTO nguoi_dung(user,password,email) VALUES('$user','$password','$email')";
        //echo $sql;
        pdo_execute($sql);
        echo $error['error'];
    }else{
        echo $error['user'];
        echo $error['email'];
    }
    
    // Trả kết quả về cho client
    
?>