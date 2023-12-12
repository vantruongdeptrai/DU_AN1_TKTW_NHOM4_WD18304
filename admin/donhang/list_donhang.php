<?php
if (is_array($loadall_chitiet_donhang)) {
    extract($loadall_chitiet_donhang);
}
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lí đơn hàng</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>ID đơn hàng</th>
                            <th>Người mua hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tổng tiền</th>
                            <th>Phương thức thanh toán</th>
                            <th>Trạng thái</th>
                            <th>Cập nhật trạng thái</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($loadall_chitiet_donhang as $tt) {
                        extract($tt);
                        $cap_nhat = "index.php?act=sua_trangthai&id_chitiet_donhang=" . $id_chitiet_donhang;
                        $lichsu_mua = "index.php?act=lichsu_mua&id_chitiet_donhang=" . $id_chitiet_donhang;
                        if ($id_trangthai == 5 || $id_trangthai == 4) {
                            echo '<tbody>
                    <tr>
                        <td>' . $id_don_hang . '</td>
                        <td>' . $user . '</td>
                        <td>' . $ngay_dat_hang . '</td>
                        <td>' . $tong_tien . '</td>
                        <td>' . $ten_pttt . '</td> 
                        <td>' . $ten_trangthai . '</td>
                        <td style="text-align:center;">
                            
                            <a href="' . $lichsu_mua . '" class="btn btn-danger btn-circle "><i class="fas fa-info-circle"></i></a>
                        </td>
                        
                    </tr>
                </tbody>';
                        } else {
                            echo '<tbody>
                            <tr>
                                <td>' . $id_don_hang . '</td>
                                <td>' . $user . '</td>
                                <td>' . $ngay_dat_hang . '</td>
                                <td>' . $tong_tien . '</td>
                                <td>' . $ten_pttt . '</td> 
                                <td>' . $ten_trangthai . '</td>
                                <td style="text-align:center;">
                                    <a href="' . $cap_nhat . '" class="btn btn-danger btn-circle "><i class="fas fa-fw fa-wrench"></i></a>
                                    <a href="' . $lichsu_mua . '" class="btn btn-danger btn-circle "><i class="fas fa-info-circle"></i></a>
                                </td>
                                
                            </tr>
                        </tbody>';
                        }

                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</div>