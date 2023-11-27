<?php 
    function load_pttt(){
        $sql = "SELECT * FROM phuong_thuc_tt WHERE 1 ORDER BY id_pttt DESC";
        $load_pttt = pdo_query($sql);
        return $load_pttt;
    }
?>