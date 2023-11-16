<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lí danh mục sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID danh mục</th>
                            <th>Tên danh mục</th>
                            <!-- <th>Số lượng sản phẩm trong danh mục</th> -->
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($list_dm as $dm) {
                        extract($dm);
                        //foreach ($count_sp_dm as $count) {
                             //extract($count);
                             //if ($iddm == $id_dm) {
                                $sua_dm = "index.php?act=sua_dm&id=" . $id_dm;
                                $xoa_dm = "index.php?act=xoa_dm&id=" . $id_dm;
                                echo '<tbody>
                        <tr>
                            <td>' . $id_dm . '</td>
                            <td>' . $ten_dm . '</td>
                            
                            <td style="display : flex ; justify-content:space-evenly;">
                            <a href="' . $xoa_dm . '" class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></a>
                            <a href="' . $sua_dm . '" class="btn btn-danger btn-circle "><i class="fas fa-fw fa-wrench"></i></a>
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