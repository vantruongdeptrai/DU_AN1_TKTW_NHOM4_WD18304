<form action="index.php?act=xac_nhan_dh" method="post">
    <br>
    <br>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thông tin người đặt hàng</h6>
            </div>
            <div class="card-body">
                <?php if (isset($_SESSION["user"])) { ?>
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
                                        <div>
                                            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio1"
                                                value="1" checked>
                                            <label class="form-check-label" for="inlineRadio1">Thanh toán khi nhận
                                                hàng</label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio3"
                                                value="2">
                                            <label class="form-check-label" for="inlineRadio3">Thanh toán Online</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                <?php } else { ?>
                    <div class="card-body">Vui lòng đăng nhập</div>
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
                <?php if (isset($_SESSION["user"])) { ?>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Size</th>
                                    <th>Giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $tongtien = 0;
                                global $img_path;
                                foreach ($_SESSION["mycart"] as $cart) {
                                    $anhsp = $img_path . $cart[2];
                                    $thanhtien = $cart[3] * $cart[4];
                                    $tongtien += $thanhtien;
                                    echo '<tr>
                                    <td>' . $cart[1] . '</td>
                                    <td>
                                    <a href="#">
                                    <img style="width:100px;height:100px" src="' . $cart[2] . '"
                                        alt="Cart Thumbnail">
                                    </a>
                                    </td>
                                    <td>' . $cart[6] . '</td>
                                    <td>
                                        <span class="amount">' . $cart[3] . '</span>
                                    </td>
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
                        <div >
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <input style=" width:170px;height:50px;border:none; border-radius:5px;background-color:#fc7c7c; color:white;" 
                                    type="submit" value="Xác nhận thanh toán" name="xac_nhan_dh">
                                </div>
                            </div>
                        </div>
                        <div style="color:green;"></div><?php if(isset($thongbao)){echo $thongbao;}?></div>
                    </div>
                <?php } else { ?>
                    <div class="card-body">Vui lòng đăng nhập</div>
                <?php } ?>
            </div>
        </div>
    </div>
</form>