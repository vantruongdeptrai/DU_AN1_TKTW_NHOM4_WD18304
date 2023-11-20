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
                                <h1 class="h4 text-gray-900 mb-4">Thêm danh mục mới</h1>
                            </div>
                            <form action="index.php?act=add_dm" class="user" id="form" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" 
                                            placeholder="Tên danh mục" name="ten_dm" id ="ten_dm">
                                    </div>
                                </div>
                                
                                <input type="submit" name="them_dm" class="btn btn-primary btn-user btn-block "
                                    value="Thêm mới">

                                <input type="reset" class="btn btn-primary btn-user btn-block"
                                    value="Nhập lại">
                            </form>
                            <br>
                            <div style="color:red;" id="showerror"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script language="javascript">
            $('form').submit(function () {
                //alert("clicked");

                // Xóa trắng thẻ div show lỗi
                //$('#showerror').html('');

                var ten_dm = $('#ten_dm').val();
                //var update_ten_dm = $('#update_ten_dm').val();
                //Kiểm tra dữ liệu có null hay không

                if ($.trim(ten_dm) == '') {
                    alert('Bạn chưa nhập tên danh mục');
                    return false;
                }
                
                $.ajax({
                    type: 'POST',
                    url: 'danhmuc/validate_add_dm.php',
                    dataType: 'text',
                    data: {
                        ten_dm: ten_dm                       
                    },
                    success: function (result) {
                        $("#showerror").html(result);
                    }
                });
                
                
                // $.ajax({
                //     type: 'POST',
                //     url: './danhmuc/validate_update_dm.php',
                //     dataType: 'text',
                //     data: {
                //         update_ten_dm: update_ten_dm                       
                //     },
                //     success: function (result) {
                //         $("#showerror").html(result);
                //     }
                // });
                return false;
            });
        
    </script>
</body>