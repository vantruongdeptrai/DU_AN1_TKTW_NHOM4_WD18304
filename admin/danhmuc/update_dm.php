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
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           name="ten_dm" placeholder="Tên danh mục mới" required value="<?php echo $ten_dm;?>">
                                    </div>
                                </div>
                                <input type="hidden" name="id_dm" value="<?php if(isset($id_dm) && $id_dm >0) echo $id_dm;?>">
                                <input type="submit" name="update_dm" class="btn btn-primary btn-user btn-block "
                                    value="Cập nhật">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>