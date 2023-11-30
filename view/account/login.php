<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Đăng nhập</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ </a></li>
                        <li>Đăng nhập</li>
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
            <div class="col-lg-6">
                <form action="index.php?act=dang_nhap" method="post" id="form_dn">
                    <div class="login-form">
                        <h4 class="login-title">Đăng nhập</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>User</label>
                                <input type="text" placeholder="User" name="user" id="user">
                            </div>
                            <div class="col-lg-12">
                                <label>Mật khẩu</label>
                                <input type="password" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="col-sm-8 align-self-center">
                                <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Ghi nhớ tài khoản</label>
                                </div>
                            </div>
                            <div class="col-sm-4 pt-1 mt-md-0">
                                <div class="forgotton-password_info">
                                    <a href="index.php?act=quen_mk"> Quên mật khẩu ?</a>
                                </div>
                            </div>
                            <div class="col-lg-12 pt-5">
                                <button class="btn custom-btn">
                                    <input style="align-items: center; border:none; color:white;" class="md-size"
                                        type="submit" value="Đăng nhập" name="dang_nhap">
                                </button>
                            </div>
                        </div>
                        <div style="color:red;" id="showerror"></div>
                    </div>
                    
                </form>
            </div>
            
        </div>
    </div>
</div>
<script language="javascript">

    // Xử lí đăng nhập 

    $('#form_dn').submit(function () {

        var user = $('#user').val();
        var password = $('#password').val();
        //Kiểm tra dữ liệu có null hay không

        if ($.trim(user) == '') {
            alert('Bạn chưa nhập tên người dùng');
            return false;
        }
        if ($.trim(password) == '') {
            alert('Bạn chưa nhập password');
            return false;
        }
        $.ajax({
            type: 'POST',
            url: './view/account/validate_login.php',
            dataType: 'text',
            data: {
                user: user,
                password: password
            },
            success: function (result) {
                $("#showerror").html(result);
            }
        });
        return false;
    });
</script>