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
                                <input type="text" placeholder="Email" name="email" id="email">
                            </div>
                            <div class="col-12">
                                <div class="btn custom-btn">
                                    <input style="align-items: center; border:none; color:white;" class="md-size"
                                        type="submit" value="Gửi mật khẩu" name="gui_mk">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="color:red;" id="showerror">
                        <?php echo $thongbao ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script language="javascript">
    $("form").submit(function(){
        var email = $("#email").val();
        if($.trim(email) == ''){
            alert("Bạn chưa nhập email");
        }
        $.ajax({
            type: 'POST',
            url: './view/account/validate_quenmk.php',
            dataType: 'text',
            data: {
                email: email
            },
            success: function (result) {
                $("#showerror").html(result);
                //alert("ok");
            }
        });
        return false;
    });
</script>