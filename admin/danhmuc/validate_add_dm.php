<?php
include("../../database/pdo.php");
    $ten_dm = isset($_POST["ten_dm"]) ? $_POST["ten_dm"] : false;
    
    // Khai báo biến lưu lỗi

    if (!$ten_dm) {
        die('{error:"bad_request"}');
    }
    //bien luu loi
    $error = array(
        'error' =>'thêm thành công',
        'ten_dm' => '',
        'update_ten_dm' => ''
    );

    if ($ten_dm) {
        $sql = "SELECT COUNT(*) FROM danh_muc WHERE ten_dm = '$ten_dm'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['ten_dm'] = 'Danh mục này đã tồn tại ! Vui lòng nhập danh mục khác !';
        }
    }
    
    if (!$error['ten_dm']){
        // Tiến hành lưu vào CSDL nếu không có lỗi
        $sql = "INSERT INTO danh_muc(ten_dm) VALUES('$ten_dm')";
        //echo $sql;
        pdo_execute($sql);
        echo $error['error'];
    }else{
        echo $error['ten_dm'];
    }
    
    // Trả kết quả về cho client
    
?>