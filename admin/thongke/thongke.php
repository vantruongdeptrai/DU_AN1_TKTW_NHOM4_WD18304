<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thống kê sản phẩm danh mục</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên danh mục</th>
                            <th>Số lượng sản phẩm</th>
                            <th>Giá nhỏ nhất</th>
                            <th>Giá lớn nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($thongke_danhmuc_soluong as $dm) {
                        extract($dm);
                        echo '<tbody>
                        <tr>
                            <td>' . $ten_dm . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . $gia_min . ' VNĐ</td>
                            <td>' . $gia_max . ' VNĐ</td>
                            <td>' . $gia_avg . ' VNĐ</td>
                        </tr>
                    </tbody>';
                    }
                    //}
                    //} ?>

                </table>
            </div>
        </div>
        <br>
        <br>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thống kê sản phẩm biến thể</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng biến thể</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($thongke_sanpham_bienthe as $dm) {
                        extract($dm);
                        echo '<tbody>
                        <tr>
                            <td>' . $ten_sp . '</td>
                            <td>' . $soluong . '</td>
                        </tr>
                    </tbody>';
                    }
                    //}
                    //} ?>

                </table>
            </div>
        </div>
    </div>

</div>