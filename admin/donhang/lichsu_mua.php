<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thông tin chi tiết đơn hàng</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Tên sản phẩm</th>
                            <th>Giá</th>
                            <th>Hình ảnh</th>
                            <th>Size</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tr>
                        <?php
                        $tongtien = 0;
                        global $img_path;
                        
                        foreach ($load_lichsu_mua as $ls) {
                            extract($ls);
                            $hinh_anh_path = "../uploads/" . $hinh_anh;
                                if (is_file($hinh_anh_path)) {
                                    $hinh_anh = "<img src='$hinh_anh_path' height='80' width='80'>";
                                } else {
                                    $hinh_anh = " Không có hình ảnh";
                                }
                            $thanhtien = (int) $so_luong * (int) $gia;
                            $tongtien += $thanhtien;
                            echo '<tr>
                                    <td>' . $ten_sp . '</td>
                                    <td>
                                        <span class="amount">' . $gia . '</span>
                                    </td>
                                    <td>
                                        '.$hinh_anh.'
                                    </td>
                                    <td>' . $ten_size . '</td>
                                    <td>' . $so_luong . '</td>
                                    <td>' . $thanhtien . '</td>
                                </tr>';
                        }
                        ?>
                    </tr>

                </table>
            </div>
        </div>
    </div>

</div>