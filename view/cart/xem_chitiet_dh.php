<?php 
    if(is_array($loadone_thongtin_donhang)){
        extract($loadone_thongtin_donhang);
    }
    
?>
<br>
<br>
<div class="account-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div>
                    <div>
                        <div class="" style="width:1200px;">
                            <h4 class="small-title">Đơn hàng của tôi</h4>
                            <?php if (isset($_SESSION["user"])) { ?>
                                <div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Người đặt hàng</th>
                                                <th>Ngày đặt</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                
                                                <th>Tổng số tiền</th>
                                                <th>Trạng thái</th>
                                                
                                            </tr>
                                            <tr>
                                                <td><?php echo $id_don_hang; ?></td>
                                                <td><?php echo $user; ?></td>
                                                <td><?php echo $ngay_dat_hang;?></td>
                                                <td><?php echo $dia_chi;?></td>
                                                <td><?php echo $sdt;?></td>
                                                
                                                <td><?php echo $tong_tien;?>VNĐ</td>
                                                <td><?php echo $ten_trangthai;?></td>
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