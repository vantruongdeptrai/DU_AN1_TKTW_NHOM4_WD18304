<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Quên mật khẩu</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ </a></li>
                        <li> // Quên mật khẩu</li>
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
                <form action="index.php?act=quen_mk" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Quên mật khẩu</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-12">
                                <input style="align-items: center; color:black;" class="btn custom-btn md-size"
                                    type="submit" value="Gửi mật khẩu" name="gui_mk">
                            </div>
                            <?php
                            if (isset($thongbao) && $thongbao != "") {
                                echo "<br>".$thongbao;
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>