<form action="index.php?act=xac_nhan_don_hang" method="post">
    <br>
    <br>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin người đặt hàng</h6>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["sdt"]!="" && $_SESSION["user"]["dia_chi"]!="") { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Người đặt</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Phương thức thanh toán</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo $_SESSION["user"]["user"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION["user"]["dia_chi"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION["user"]["sdt"]; ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach ($load_pttt as $pttt) {
                                            extract($pttt);
                                            echo '<div>
                                        <input class="form-check-input" type="radio" name="id_pttt" id="inlineRadio1"
                                            value="'.$id_pttt.'" checked>
                                        <label class="form-check-label" for="inlineRadio1">'.$ten_pttt.'</label>
                                    </div>';
                                        }

                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="card-body">Vui lòng cập nhật thông tin</div>
                <?php } ?>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin đơn hàng</h6>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION["user"]) && $_SESSION["user"]["sdt"]!="" && $_SESSION["user"]["dia_chi"]!="") { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $tongtien = 0;
                                global $img_path;
                                foreach ($load_chitiet_giohang as $cart) {
                                    extract($cart);
                                    echo '<input type="hidden" name="id_ctsp" value="'.$id_ctsp.'">
                                    <input type="hidden" name="so_luong" value="'.$so_luong.'">';
                                    $anhsp = $img_path . $hinh_anh;
                                    $thanhtien = (int) $so_luong * (int) $gia;
                                    $tongtien += $thanhtien;
                                    echo '<tr>
                                    
                                    <td>' . $ten_sp . '</td>
                                    <td>
                                    <a href="#">
                                    <img style="width:100px;height:100px" src="' . $anhsp . '"
                                        alt="Cart Thumbnail">
                                    </a>
                                    </td>
                                    <td>' . $ten_size . '</td>
                                    <td>
                                        <span class="amount">' . $gia . '</span>
                                    </td>
                                    <td>' . $so_luong .'</td>
                                    <td>' . $thanhtien . '</td>
                                </tr>';
                                }
                                ?>
                            </tbody>

                        </table>
                        <br>
                        <div>Tổng tiền :
                            <?php echo $tongtien ?> VNĐ
                        </div>
                        <div>
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <input type="hidden" name="id_chitiet_gh" value="<?php echo $id_chitiet_gh; ?>">
                                    <input type="hidden" name="tong_tien" value="<?php echo $tongtien; ?>">
                                    <?php foreach($loadall_donhang as $dh){
                                        extract($dh);
                                        //var_dump($dh);
                                        echo '<input type="hidden" name="id_don_hang" value="'.$id_don_hang.'">';
                                        echo '<input type="hidden" name="id_ctsp" value="'.$id_ctsp.'">';
                                    }?>
                                    
                                    <input type="hidden" name="tong_tien" value="<?php echo $tongtien; ?>">
                                    
                                    <input
                                        style=" width:170px;height:50px;border:none; border-radius:5px;background-color:#fc7c7c; color:white;"
                                        type="submit" value="Xác nhận thanh toán" name="xac_nhan_dh">
                                </div>
                            </div>
                        </div>
                        <div style="color:green;"></div>
                        <?php if (isset($thongbao)) {
                            echo $thongbao;
                        } ?>
                    </div>
                    
                </div>
            <?php } else { ?>
                <div class="card-body">Vui lòng cập nhật thông tin</div>
            <?php } ?>
        </div>
    </div>
    </div>
</form>