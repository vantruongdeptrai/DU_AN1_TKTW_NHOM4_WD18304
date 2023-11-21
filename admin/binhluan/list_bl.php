<?php
//session_start();
$_SESSION['tk'] = loadall_taikhoan();
if (isset($_SESSION['tk']) && is_array($_SESSION['tk'])) {
    extract($_SESSION['tk']);
}
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
                            <th>ID bình luận</th>
                            <th>Nội dung</th>
                            <th>Người bình luận</th>
                            <th>Sản phẩm</th>
                            <th>Ngày bình luận</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($_SESSION['tk'] as $tk) {
                        extract($tk);
                        foreach ($loadbl as $bl) {
                            extract($bl);

                            $sua_bl = "index.php?act=sua_dm&id=" . $id_bl;
                            $xoa_bl = "index.php?act=xoa_dm&id=" . $id_bl;
                            echo '<tbody>
                        <tr>
                            <td>' . $id_bl . '</td>
                            <td>' . $noi_dung . '</td>
                            <td>' . $user . '</td>
                            <td>' . $id_sp . '</td>
                            <td>' . $ngay_binh_luan . '</td>
                            <td style="display : flex ; justify-content:space-evenly;">
                            <a href="' . $xoa_bl . '" class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></a>
                            <a href="' . $sua_bl . '" class="btn btn-danger btn-circle "><i class="fas fa-fw fa-wrench"></i></a>
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