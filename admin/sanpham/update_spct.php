<?php
if (is_array($one_ctsp)) {
    extract($one_ctsp);
}
if (is_array($list_size)) {
    extract($list_size);
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
                                <h1 class="h4 text-gray-900 mb-4">Cập nhật Size</h1>
                            </div>
                            <form action="index.php?act=update_spct" class="user" method="post"
                                enctype="multipart/form-data">
                                <div class="input-group">
                                    <select class="form-control bg-light border-0 small" name="id_sp">
                                        <?php
                                            echo "<option class='input-group-append' value=$id_sp>$id_sp</option>";
                                        ?>
                                    </select>
                                </div>
                                <br>
                                <!-- Size -->
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
                                <input type="hidden" name="id_ctsp" value="<?php echo $id_ctsp ?>">
                                <input type="submit" class="btn btn-primary btn-user btn-block" name="cap_nhat_size"
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