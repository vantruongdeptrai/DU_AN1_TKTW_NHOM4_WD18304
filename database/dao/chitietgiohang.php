<?php 
    function insert_chitiet_giohang($id_gio_hang,$id_ctsp){
        $sql = "INSERT INTO chi_tiet_giohang(id_gio_hang,id_ctsp) VALUES ('$id_gio_hang','$id_ctsp')";
    }
?>