<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div style="display:flex; align-items:center;" class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lí sản phẩm</h6>
            <form action="index.php?act=list_sp" method="post"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <!-- <div class="input-group">
                    
                    <div class="input-group-append">
                        <input class="btn btn-primary " type="submit" name="ok" value="Lọc">
                    </div>
                </div> -->
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                    <select class="form-control bg-light border-0 small" name="id_dm">
                        <option value="0">Tất cả sản phẩm</option>
                        <?php
                        foreach ($list_dm as $dm) {
                            extract($dm);
                            echo "<option class='input-group-append' value=$id_dm>$ten_dm</option>";
                        }
                        ?>
                    </select>
                    <div class="input-group-append">
                        <input class="btn btn-primary " type="submit" name="ok" value="Lọc">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Size</th>
                        </tr>
                    </thead>
                    <?php
                        foreach ($list_ctsanpham as $ctsp) {
                            extract($ctsp);
                                $hinh_anh_path = "../uploads/" . $hinh_anh;
                                if (is_file($hinh_anh_path)) {
                                    $hinh_anh = "<img src='$hinh_anh_path' height='80' width='80'>";
                                } else {
                                    $hinh_anh = " Không có hình ảnh";
                                }
                                echo '<tbody>
                                    <tr>
                                        <td>' . $idsp_ct . '</td>
                                        <td>' . $ten_sp . '</td>
                                        <td>' . $hinh_anh . '</td>
                                        <td>' . $ten_size . '</td>
                                    </tr>
                                </tbody>';
                            }
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>