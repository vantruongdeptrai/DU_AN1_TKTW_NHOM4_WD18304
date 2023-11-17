<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Đổi mật khẩu</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ </a></li>
                        <li> // Đổi mật khẩu</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="login-register-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0">
                <?php
                if (isset($_SESSION["user"]) && is_array($_SESSION["user"])) {
                    extract($_SESSION["user"]);
                }
                ?>
                <form action="index.php?act=doi_mk" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Quên mật khẩu</h4>
                        <div class="row ">
                            <input type="hidden" name="user" value="<?php echo $user ?>">
                            <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
                            <div class="single-input">
                                <label>Mật khẩu hiện tại</label>
                                <input type="password" name="password" value="<?php echo $password ?>">
                            </div>
                            <div class="single-input">
                                <label>Mật khẩu mới</label>
                                <input type="password" name="newpassword">
                            </div>
                            <div class="single-input">
                                <label>Xác nhận mật khẩu mới</label>
                                <input type="password">
                            </div>
                            <div class="col-lg-12 pt-5">
                                <button class="btn custom-btn">
                                    <input style="align-items: center; border:none; color:white;" class="md-size"
                                        type="submit" value="Đổi mật khẩu" name="doi_mk">
                                </button>
                            </div>
                            <?php
                            if (isset($thongbao) && $thongbao != "") {
                                echo "<br>" . $thongbao;
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>