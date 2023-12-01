<?php
    function insert_donhang($id_user,$ngay_dat_hang){
        $sql = "INSERT INTO don_hang(id_user,ngay_dat_hang)
         VALUES ('$id_user','$ngay_dat_hang')";
        pdo_execute($sql);
    }
    function loadall_donhang(){
        $sql = "SELECT MAX(id_don_hang) as 'id_don_hang' FROM don_hang";
        $loadall_donhang = pdo_query($sql);
        //var_dump($loadall_donhang);
        return $loadall_donhang;
    }
?>