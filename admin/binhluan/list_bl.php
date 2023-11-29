<?php
//session_start();
$loadbl = loadbl_ngdung_sanpham(0);
?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lí bình luận</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <th>Nội dung</th>
                            <th>Người bình luận</th>
                            <th>Sản phẩm</th>
                            
                            <th>Ngày bình luận</th>
                        </tr>
                    </thead>
                    <?php
                    
                        foreach ($loadbl as $bl) {
                            extract($bl);
                            echo '<tbody>
                        <tr>
                            
                            <td>' . $noi_dung . '</td>
                            <td>' . $user . '</td>
                            <td>' . $ten_sp . '</td>
                            <td>' . $ngay_binh_luan . '</td>
                            
                        </tr>
                    </tbody>';
                        }
                    
                    ?>

                </table>
            </div>
        </div>
    </div>

</div>