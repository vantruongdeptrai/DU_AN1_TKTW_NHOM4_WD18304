<?php 
    if(is_array($loadone_thongtin_donhang)){
        extract($loadone_thongtin_donhang);
    }
?>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Cập nhật trạng thái</h1>
                            </div>
                            <form class="user" action="index.php?act=capnhat_trangthai" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="id_trangthai" id="">
                                            <?php
                                            foreach($loadall_trangthai as $trangthai){
                                                extract($trangthai);
                                                    echo "<option value=$id_trangthai>$ten_trangthai</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" id ="" name="id_chitiet_donhang" value="<?php echo $id_chitiet_donhang;?>">
                                <input type="submit" name="capnhat_trangthai" class="btn btn-primary btn-user btn-block "
                                    value="Cập nhật">
                            </form>
                            <br>
                            <div style="color:red;" id="showerror"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>