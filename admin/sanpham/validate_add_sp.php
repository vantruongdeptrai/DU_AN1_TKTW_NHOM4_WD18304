<?php
include("../../database/pdo.php");
    $ten_sp = isset($_POST["ten_sp"]) ? $_POST["ten_sp"] : false;
    $gia = isset($_POST["gia"]) ? $_POST["gia"] : false;
    $mota = isset($_POST["mota"]) ? $_POST["mota"] : false;
    $hinh_anh = isset($_POST["hinh_anh"]) ? $_POST["hinh_anh"] : false;
    // Khai báo biến lưu lỗi

    if (!$ten_sp || !$gia || !$mota || !$hinh_anh) {
        die('{error:"bad_request"}');
    }
    //bien luu loi
    $error = array(
        'error' =>'thêm thành công',
        'ten_sp' => '',
        'gia' => '',
        'mota' => '',
        'hinh_anh' => ''
    );

    if ($ten_sp) {
        $sql = "SELECT COUNT(*) FROM san_pham WHERE ten_sp = '$ten_sp'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['ten_sp'] = 'Sản phẩm này đã tồn tại ! Vui lòng nhập tên sản phẩm khác !';
        }
    }
    
    if (!$error['ten_sp']){
        // Tiến hành lưu vào CSDL nếu không có lỗi
        $sql = "INSERT INTO san_pham(ten_sp,gia,hinh_anh,mota) VALUES('$ten_dm','$gia','$hinh_anh','$mota')";
        //echo $sql;
        pdo_execute($sql);
        echo $error['error'];
    }else{
        echo $error['ten_sp'];
    }
    
    // Trả kết quả về cho client
    
?>