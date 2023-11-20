<?php
include("../../database/pdo.php");
    $update_ten_dm = isset($_POST["update_ten_dm"]) ? $_POST["update_ten_dm"] : false;
    $id_dm = isset($_POST["id_dm"]) ? $_POST["id_dm"] : false;
    // Khai báo biến lưu lỗi

    if (!$update_ten_dm) {
        die('{error:"bad_request"}');
    }
    //bien luu loi
    $error = array(
        'error' =>'cập nhật thành công',
        'ten_dm' => '',
        'update_ten_dm' => ''
    );

    if ($update_ten_dm) {
        $sql = "SELECT COUNT(*) FROM danh_muc WHERE ten_dm = '$update_ten_dm'";
        $row = pdo_query_value($sql);
        if ((int) $row > 0) {
            $error['update_ten_dm'] = 'Danh mục này đã tồn tại ! Vui lòng nhập danh mục khác !';
        }
    }
    
    if (!$error['update_ten_dm']){
        // Tiến hành lưu vào CSDL nếu không có lỗi
        $sql = "UPDATE danh_muc SET ten_dm = '$update_ten_dm' WHERE id_dm = '$id_dm'";
        //echo $sql;
        pdo_execute($sql);
        echo $error['error'];
    }else{
        echo $error['update_ten_dm'];
    }
    
    // Trả kết quả về cho client
    
?>