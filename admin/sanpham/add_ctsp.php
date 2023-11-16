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
                                <select class="form-control bg-light border-0 small" name="id_sp">
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
                                    <select class="form-control bg-light border-0 small" name="id_size">
                                        <?php
                                        foreach ($list_size as $size) {
                                            extract($size);
                                            echo "<option class='input-group-append' value=$id_size>$ten_size</option>";
                                        }
                                        ?>

                                    </select>

                                </div>
                                <br>
                                
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="them_sp"
                                    value="Thêm mới">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                
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