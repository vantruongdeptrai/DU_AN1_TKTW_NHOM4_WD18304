<?php
include("../../database/pdo.php");
    $diachi = isset($_POST["diachi"]) ? $_POST["diachi"] : false;
    $sdt = isset($_POST["sdt"]) ? $_POST["sdt"] : false;
    $email = isset($_POST["email"]) ? $_POST["email"] : false;
    $id_user = isset($_POST["id_user"]) ? $_POST["id_user"] : false;
    // Khai báo biến lưu lỗi

    if (!$diachi || !$sdt ||!$email || !$id_user) {
        die('{error:"bad_request"}');
    }
    //bien luu loi
    $error = array(
        'error' =>'Cập nhật thành công',
        'diachi' => '',
        'sdt' => '',
        'email' => ''
    );

    if ($sdt) {
        $sql = "SELECT COUNT(*) FROM nguoi_dung WHERE sdt = '$sdt'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['sdt'] = 'Số điện thoại này đã tồn tại ! Vui lòng nhập số điện thoại khác !';
        }
    }
    if ($email) {
        $sql = "SELECT COUNT(*) FROM nguoi_dung WHERE email = '$email'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['email'] = 'Email này đã tồn tại ! Vui lòng nhập email khác !';
        }
    }
    if($sdt){
        $sdt = preg_replace('/[^0-9]/','',$sdt);
        if(strlen($sdt)===10){
            if(substr($sdt,0,1)==='0'|| substr($sdt,0,2)==='84'){
                $error['sdt']='';
            }else{
                $error['sdt']='Số điện thoại không đúng định dạng số di động Việt Nam';
            }
        }else{
            $error['sdt']='Số điện thoại không đúng định dạng';
        }
    }
    if($email){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['email']='Email không đúng định dạng';
        }
    }
    if (!$error['email']&&!$error['sdt']){
        // Tiến hành lưu vào CSDL nếu không có lỗi
        $sql = "UPDATE nguoi_dung SET email='$email' , sdt= '$sdt' , dia_chi ='$diachi' WHERE id_user='$id_user'";
        //echo $sql;
        pdo_execute($sql);
        echo $error['error'];
    }else{
        echo $error['email'].'<br>';
        echo $error["sdt"];
    }
    
    // Trả kết quả về cho client
    
?>