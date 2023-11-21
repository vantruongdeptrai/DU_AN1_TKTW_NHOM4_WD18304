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
    if($email){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['email']='Email không đúng định dạng';
        }
    }
    if (!$error['user']){
        // Tiến hành lưu vào CSDL nếu không có lỗi
        $sql = "INSERT INTO nguoi_dung(user,password,email) VALUES('$user','$password','$email')";
        //echo $sql;
        pdo_execute($sql);
        echo $error['error'];
    }else{
        echo $error['user'];
    }
    
    // Trả kết quả về cho client
    
?>