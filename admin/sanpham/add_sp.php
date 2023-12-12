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
                                <h1 class="h4 text-gray-900 mb-4">Thêm sản phẩm mới</h1>
                            </div>
                            <form action="index.php?act=add_sp" class="user" method="post"
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
                                        <input type="text" class="form-control form-control-user" 
                                            placeholder="Tên sản phẩm" name="ten_sp" id="ten_sp">
                                    </div>
                                    <!-- Giá -->
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="gia"
                                            placeholder="Giá" name="gia">
                                    </div>
                                </div>
                                <!-- Ảnh  -->
                                <input type="file" class="form-group" id="hinh_anh" name="hinh_anh">
                                <br>

                                <!-- Mô tả -->
                                <div class="form-group">

                                    <input type="text" class="form-control form-control-user" id="mota"
                                        placeholder="Mô tả sản phẩm" name="mota">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="them_sp"
                                    value="Thêm mới">
                            </form>
                            <div style="color:red;" id="showerror"></div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                
            </div>
            </div>
        </div>

    </div>
    <script language="javascript">
            $('form').submit(function () {

                var ten_sp = $('#ten_sp').val();
                var gia = $('#gia').val();
                var hinh_anh = $('#hinh_anh')[0].files[0].name;
                var id_dm = $('#id_dm').val();
                
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
                if ($.trim(hinh_anh) == '') {
                    alert('Bạn chưa nhập hình ảnh');
                    return false;
                }
                if ($.trim(mota) == '') {
                    alert('Bạn chưa nhập mô tả');
                    return false;
                }
                $.ajax({
                    type: 'POST',
                    url: './sanpham/validate_add_sp.php',
                    dataType: 'text',
                    data: {
                        ten_sp : ten_sp ,
                        gia : gia ,
                        mota : mota,
                        id_dm : id_dm,
                        hinh_anh : hinh_anh                    
                    },
                    success: function (result) {
                        $("#showerror").html(result);
                    }
                });
                return false;
            });
        
    </script>
</body>