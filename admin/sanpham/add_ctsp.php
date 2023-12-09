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
                            <form action="index.php?act=them_ctsp" class="user" method="post"
                                enctype="multipart/form-data">
                                <div class="input-group">
                                    <select class="form-control bg-light border-0 small" name="id_sp" id="id_sp" >
                                        <?php
                                        foreach ($list_sp as $sp) {
                                            extract($sp);
                                            echo "<option class='input-group-append' value=$id_sp>$ten_sp</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <label>Size</label>
                                <div class="input-group">
                                    <select class="form-control bg-light border-0 small" name="id_size" id="id_size" >
                                        <?php
                                        foreach ($list_size as $size) {
                                            extract($size);
                                            echo "<option class='input-group-append' value=$id_size>$ten_size</option>";
                                        }
                                        ?>

                                    </select>

                                </div>
                                <br>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="so_luong"
                                        placeholder="Số lượng" name="so_luong">
                                </div>
                                <br>
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

                var so_luong = $('#so_luong').val();
                var id_size = $('#id_size').val();
                var id_sp = $('#id_sp').val();

                //Kiểm tra dữ liệu có null hay không
                if($.trim(so_luong) == ''){
                    alert('Chưa nhập số lượng !');
                    return false;
                }

                if ($.trim(id_size) == '') {
                    alert('Bạn chưa chọn size');
                    return false;
                }
                if ($.trim(id_sp) == '') {
                    alert('Bạn chưa chọn sản phẩm');
                    return false;
                }
                
                $.ajax({
                    type: 'POST',
                    url: './sanpham/validate_add_ctsp.php',
                    dataType: 'text',
                    data: {
                        so_luong : so_luong ,
                        id_size : id_size ,
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