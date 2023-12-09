<?php
if (is_array($one_sp)) {
    extract($one_sp);
}
if (is_array($list_size)) {
    extract($list_size);
}
$hinh_anh_path = "../uploads/" . $hinh_anh;
if (is_file($hinh_anh_path)) {
    $hinh_anh = "<img src='$hinh_anh_path' height='80' width='80'>";
} else {
    $hinh_anh = " không có hình";
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
                                <h1 class="h4 text-gray-900 mb-4">Cập nhật sản phẩm mới</h1>
                            </div>
                            <form action="index.php?act=update_sp" class="user" method="post"
                                enctype="multipart/form-data">
                                <div class="input-group">
                                    
                                    <select class="form-control bg-light border-0 small" name="id_dm" id="id_dm">
                                        <?php
                                        foreach ($list_dm as $dm) {
                                            extract($dm);
                                            echo "<option class='input-group-append' value=$id_dm>$ten_dm</option>";
                                        }
                                        ?>
                                    </select>
                                    
                                </div>
                                <br>
                                <div class="form-group row">
                                    <!-- Tên -->
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="ten_sp"
                                            placeholder="Tên sản phẩm" name="ten_sp" value="<?php echo $ten_sp ?>">
                                    </div>
                                    <!-- Giá -->
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="gia"
                                            placeholder="Giá" name="gia" value="<?php echo $gia ?>">
                                    </div>
                                </div>
                                <!-- Ảnh  -->
                                <input type="file" class="form-group" id="exampleInputEmail" name="hinh_anh" id="hinh_anh">
                                <?php echo $hinh_anh ?>
                                <br>
                                <!-- Mô tả -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="mota"
                                        placeholder="Mô tả sản phẩm" name="mota" value="<?php echo $mo_ta ?>">
                                </div>
                                <input type="hidden" name="id_sp" id="id_sp" value="<?php echo $id_sp ?>">
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="cap_nhat"
                                    value="Cập nhật">
                            </form>
                            <div style="color:red;" id="showerror"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script language="javascript">
            $('form').submit(function () {

                var ten_sp = $('#ten_sp').val();
                var gia = $('#gia').val();
                var hinh_anh = $('#hinh_anh').val();
                var id_dm = $('#id_dm').val();
                var id_sp = $('#id_sp').val();
                var mota = $('#mota').val();

                //Kiểm tra dữ liệu có null hay không
                if($.trim(id_dm) == ''){
                    alert('Chưa có danh mục sản phẩm');
                    return false;
                }

                if ($.trim(ten_sp) == '') {
                    alert('Bạn chưa nhập tên sản phẩm');
                    return false;
                }
                if ($.trim(gia) == '') {
                    alert('Bạn chưa nhập giá');
                    return false;
                }
                // if ($.trim(hinh_anh) == '') {
                //     alert('Bạn chưa nhập hình ảnh');
                //     return false;
                // }
                if ($.trim(mota) == '') {
                    alert('Bạn chưa nhập mô tả');
                    return false;
                }
                $.ajax({
                    type: 'POST',
                    url: './sanpham/validate_update_sp.php',
                    dataType: 'text',
                    data: {
                        ten_sp : ten_sp ,
                        gia : gia ,
                        mota : mota,
                        id_dm : id_dm,
                        id_sp : id_sp                      
                    },
                    success: function (result) {
                        $("#showerror").html(result);
                    }
                });
                return false;
            });
        
    </script>
</body>