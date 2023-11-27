<?php 
    function load_trangthai(){
        $sql = "SELECT * FROM trang_thai WHERE 1 ORDER BY id_trangthai DESC";
        $load_trangthai = pdo_query($sql);
        return $load_trangthai;
    }
?>