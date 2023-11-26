<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>My Account</h1>
                    <ul>
                        <li><a href="index.html">Home </a></li>
                        <li> // My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="account-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                            href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                            aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders"
                            role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address"
                            role="tab" aria-controls="account-address" aria-selected="false">Addresses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details"
                            role="tab" aria-controls="account-details" aria-selected="false">Account Details</a>
                    </li>
                    <!-- <li class="nav-item">
                            <a class="nav-link" id="account-logout-tab" href="index.php?act=dang_xuat" role="tab"
                                aria-selected="false">Logout</a>
                        </li> -->
                </ul>
            </div>
            <div class="col-lg-9">
                <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                    <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                        aria-labelledby="account-dashboard-tab">
                        <div class="myaccount-dashboard">
                            <p>Hello <b>Bucker</b> (not Bucker? <a href="login-register.html">Sign
                                    out</a>)</p>
                            <p>From your account dashboard you can view your recent orders, manage your shipping and
                                billing addresses and <a href="javascript:void(0)">edit your password and account
                                    details</a>.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                        <div class="myaccount-orders">
                            <h4 class="small-title">Đơn hàng của tôi</h4>
                            <?php if(isset($_SESSION["user"])){?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày đặt</th>
                                            <th>Trạng thái</th>
                                            <th>Tổng số tiền</th>
                                            <th></th>
                                        </tr>
                                        <?php 
                                            if(isset($loadall_donhang)){
                                                foreach($loadall_donhang as $dh){
                                                    extract($dh);
                                                    echo '<tr>
                                                    <td><a class="account-order-id" href="javascript:void(0)">#'.$id_don_hang.'</a></td>
                                                    <td>'.$ngay_dat_hang.'</td>
                                                    <td>'.$trang_thai.'</td>
                                                    <td>'.$tong_tien.'</td>
                                                    <td><a href="javascript:void(0)"
                                                            class="btn btn-secondary btn-primary-hover"><span>View</span></a>
                                                    </td>
                                                </tr>
                                                ';
                                                }
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <?php }else{?>
                                <div class="table-responsive">Vui lòng đăng nhập</div>
                                <?php }?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-address" role="tabpanel"
                        aria-labelledby="account-address-tab">
                        <div class="myaccount-address">
                            <div class="row">
                                <?php
                                if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                                    extract($_SESSION["user"]);
                                    ?>
                                    <div class="col">
                                        <h4 class="small-title">Địa chỉ</h4>
                                        <address>
                                            <?php echo $dia_chi ?>
                                        </address>
                                    </div>
                                <?php } else { ?> Vui lòng đăng nhập !!!
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-details" role="tabpanel"
                        aria-labelledby="account-details-tab">
                        <div class="myaccount-details">
                            <?php
                            if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                                extract($_SESSION["user"]);
                                ?>
                                <form action="index.php?act=capnhat_taikhoan" class="myaccount-form" method="post">
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>Tài khoản (user)</label>
                                            <input type="text" name="user" value="<?php echo $user ?>" disabled>
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Số điện thoại</label>
                                            <input type="text" name="sdt" value="<?php echo $sdt ?>" id="sdt">
                                        </div>
                                        <div class="single-input">
                                            <label>Địa chỉ</label>
                                            <input type="text" name="diachi" value="<?php echo $dia_chi ?>" id="diachi">
                                        </div>
                                        <div class="single-input">
                                            <label>Email</label>
                                            <input type="text" name="email" value="<?php echo $email ?>" id="email">
                                        </div>
                                        <input type="hidden" name="id_user" value="<?php echo $id_user ?>" id="id_user">
                                        <input type="hidden" name="password" value="<?php echo $password ?>">
                                        <div class="single-input">

                                            <input style="align-items: center; color:white;" class=" btn custom-btn md-size"
                                                type="submit" value="Lưu thay đổi" name="capnhat_tk">

                                        </div>
                                        <div style="color:red;" id="showerror"></div>
                                    </div>
                                </form>
                                <?php
                            } else { ?>
                                Vui lòng đăng nhập !!!
                                <?php
                            }
                            ?>


                            <?php
                            if (isset($thongbao) && $thongbao != "") {
                                echo $thongbao;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
    $('form').submit(function () {

        var diachi = $('#diachi').val();
        var id_user = $('#id_user').val();
        var email = $('#email').val();
        var sdt = $('#sdt').val();
        //Kiểm tra dữ liệu có null hay không
        if($.trim(diachi) == ''&&$.trim(sdt) == ''&&$.trim(email) == ''){
            alert('Vui lòng nhập thông tin!');
            return false;
        }
        if ($.trim(diachi) == '') {
            alert('Bạn chưa nhập địa chỉ');
            return false;
        }
        
        if ($.trim(email) == '') {
            alert('Bạn chưa nhập email');
            return false;
        }
        if ($.trim(sdt) == '') {
            alert('Bạn chưa nhập số điẹn thoại');
            return false;
        }
        $.ajax({
            type: 'POST',
            url: './view/account/validate_my-account.php',
            dataType: 'text',
            data: {
                diachi: diachi,
                email: email,
                sdt : sdt,
                id_user :id_user

            },
            success: function (result) {
                $("#showerror").html(result);
            }
        });
        return false;
    });
</script>