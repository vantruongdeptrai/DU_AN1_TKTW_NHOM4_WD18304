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
                            <form action="index.php?act=add_sp" class="user" method="post" enctype="multipart/form-data">
                                <div class="input-group">
                                    <select class="form-control bg-light border-0 small" name="id_dm">
                                        <?php 
                                            foreach($list_dm as $dm){
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
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Tên sản phẩm" name="ten_sp">
                                    </div>
                                    <!-- Giá -->
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Giá" name="gia">
                                    </div>
                                </div>
                                        <!-- Ảnh  -->
                                    <input type="file" class="form-group"
                                        id="exampleInputEmail" name="hinh_anh">
                                        <!-- Size -->
                                <div class="input-group">
                                    <select class="form-control bg-light border-0 small" name="id_size">
                                        <?php 
                                            foreach($list_size as $size){
                                                extract($size);
                                                echo "<option class='input-group-append' value=$id_size>$ten_size</option>";
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                                <br>
                                <!-- Mô tả -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Mô tả sản phẩm" name="mota">
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="them_sp"value="Thêm mới">
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