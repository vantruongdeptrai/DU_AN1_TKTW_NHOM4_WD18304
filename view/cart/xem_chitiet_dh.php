<?php 
    if(is_array($loadone_donhang)){
        extract($loadone_donhang);
    }
    if(is_array($load))
?>
<br>
<br>
<div class="account-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div>
                    <div>
                        <div class="myaccount-orders">
                            <h4 class="small-title">Đơn hàng của tôi</h4>
                            <?php if (isset($_SESSION["user"])) { ?>
                                <div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Ngày đặt</th>
                                                <th>Trạng thái</th>
                                                <th>Tổng số tiền</th>
                                                
                                            </tr>
                                            <tr>
                                                <td><?php echo $id_don_hang; ?></td>
                                                <td><?php echo $ngay_dat_hang;?></td>
                                                <td><?php echo $ten_trangthai;?></td>
                                                <td><?php echo $tong_tien;?>VNĐ</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <div class="table-responsive">Vui lòng đăng nhập</div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>