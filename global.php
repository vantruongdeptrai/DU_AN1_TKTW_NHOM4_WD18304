<?php
    $img_path = "uploads/";
    $thongbao="";
    $load_ctsp_home = load_ctsp();
            if(isset($_GET["id_dm"])&&$_GET["id_dm"]>0){
                $id_dm = $_GET["id_dm"];
                //$load_ctsp_danhmuc = load_ctsp_danhmuc($id_dm);
            }
            $load_ctsp_home = load_ctsp(0);
?>


