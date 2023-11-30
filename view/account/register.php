<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Đăng kí</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ </a></li>
                        <li> Đăng kí</li>
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
                <form action="index.php?act=dang_ki" method="post" id="form_dk">
                    <div class="login-form">
                        <h4 class="login-title">Đăng kí</h4>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <label>Tên người dùng</label>
                                <input type="text" placeholder="User" name="user" id="user">
                            </div>
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="text" placeholder="Email" name="email" id="email">
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input type="password" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="col-lg-12 pt-5">
                                <button class="btn custom-btn">
                                    <input style="align-items: center; border:none; color:white;" class=" md-size"
                                        type="submit" value="Đăng kí" name="dang_ki">
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="color:red;" id="showerror"></div>
                </form>

            </div>
        </div>
    </div>
</div>
<script language="javascript">
    
    // Xử lí đăng kí

    $('#form_dk').submit(function () {

        var user = $('#user').val();
        var password = $('#password').val();
        var email = $('#email').val();
        //Kiểm tra dữ liệu có null hay không

        if ($.trim(user) == '') {
            alert('Bạn chưa nhập tên người dùng');
            return false;
        }
        if ($.trim(password) == '') {
            alert('Bạn chưa nhập password');
            return false;
        }
        if ($.trim(email) == '') {
            alert('Bạn chưa nhập email');
            return false;
        }
        $.ajax({
            type: 'POST',
            url: './view/account/validate_register.php',
            dataType: 'text',
            data: {
                user: user,
                password: password,
                email: email

            },
            success: function (result) {
                $("#showerror").html(result);
            }
        });
        return false;
    });

</script>