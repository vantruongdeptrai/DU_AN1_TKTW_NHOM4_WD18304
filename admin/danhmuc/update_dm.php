<?php 
    if(is_array($one_dm)){
        extract($one_dm);
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
                                <h1 class="h4 text-gray-900 mb-4">Cập nhật danh mục</h1>
                            </div>
                            <form class="user" action="index.php?act=update_dm" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="update_ten_dm"
                                           name="ten_dm" placeholder="Tên danh mục mới" value="<?php echo $ten_dm;?>">
                                    </div>
                                </div>
                                <input type="hidden" id = "id_dm" name="id_dm" value="<?php if(isset($id_dm) && $id_dm >0) echo $id_dm;?>">
                                <input type="submit" name="update_dm" class="btn btn-primary btn-user btn-block "
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

    <script language="javascript">
            $('form').submit(function () {

                var update_ten_dm = $('#update_ten_dm').val();
                //Kiểm tra dữ liệu có null hay không
                var id_dm = $('#id_dm').val();
                if ($.trim(update_ten_dm) == '') {
                    alert('Bạn chưa nhập tên danh mục');
                    return false;
                }
                
                
                $.ajax({
                    type: 'POST',
                    url: './danhmuc/validate_update_dm.php',
                    dataType: 'text',
                    data: {
                        update_ten_dm: update_ten_dm,
                        id_dm : id_dm                       
                    },
                    success: function (result) {
                        $("#showerror").html(result);
                    }
                });
                return false;
            });
        
    </script>
</body>