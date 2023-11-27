<?php

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
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php
                            echo '<tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="display : flex ; justify-content:space-evenly;">
                            <a href="" class="btn btn-danger btn-circle "><i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-danger btn-circle "><i class="fas fa-fw fa-wrench"></i></a>
                            </td>
                        </tr>
                    </tbody>';
                      
                    ?>

                </table>
            </div>
        </div>
    </div>

</div>