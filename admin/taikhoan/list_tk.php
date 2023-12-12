<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lí tài khoản</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID người dùng</th>
                            <th>Tên người dùng</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Trạng thái ( 0 : còn hoạt động , 1 : tắt hoạt động)</th>
                            <!-- <th>Số lượng sản phẩm trong danh mục</th> -->
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($list_tk as $tk) {
                        extract($tk);
                                $xoa_tk = "index.php?act=xoa_tk&id_user=" . $id_user;
                                
                                echo '<tbody>
                        <tr>
                            <td>' . $id_user . '</td>
                            <td>' . $user . '</td>
                            <td>' . $password . '</td>
                            <td>' . $email . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $dia_chi . '</td>
                            <td>' . $trang_thai . '</td>
                            <td style="display : flex ; justify-content:space-evenly;">
                            <a href="' . $xoa_tk . '" class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></a>
                            
                            </td>
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