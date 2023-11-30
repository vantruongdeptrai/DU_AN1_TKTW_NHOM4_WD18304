<?php
session_start();
include "../database/pdo.php";
include "../database/dao/binhluan.php";
$id_sp = $_REQUEST['id_sp'];
//echo $idpro;
$listbl = loadbl_ngdung_sanpham($id_sp);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS 
    ========================= -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--modernizr min js here-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <style>
        .customer__reviews table{
            text-align: center;
            width: 100%;
        }
        .customer__reviews table tr td:nth-child(1){
            width: 40%;
        }
        .customer__reviews table tr th:nth-child(1){
            width: 40%;
        }
        .customer__reviews table tr td:nth-child(2){
            width: 20%;
        }
        .customer__reviews table tr th:nth-child(2){
            width: 20%;
        }
        .customer__reviews table tr td:nth-child(3){
            width: 30%;
        }
        .customer__reviews table tr th:nth-child(3){
            width: 30%;
        }
    </style>
</head>

<body>
    <div style="border:1px solid #fc7c7c; height:200px;border-radius:5px "
        class="customer__reviews d-flex justify-content-between mb-20">
            <table>
                <thead>
                    <th>Nội dung</th>
                    <th>Người dùng</th>
                    <th>Ngày bình luận</th>
                </thead>
                <tbody>
                <?php
                foreach ($listbl as $bl) {
                    //var_dump($listbl); 
                    extract($bl);
                    echo '<tr><td>' . $noi_dung . '</td>';
                    echo '<td>' . $user . '</td>';
                    echo '<td>' . $ngay_binh_luan . '</td></tr>';

                }
                ?>
                </tbody>
            </table>
    </div>
    <div class="product_review_form">
        <?php
        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            extract($_SESSION['user']);
            ?>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                        <input type="hidden" name="id_user" value="<?= $id_user ?>">
                        <label for="review_comment">Bình luận</label>
                        <textarea class="border" name="noidung" id="review_comment"></textarea>
                    </div>
                </div>
                <br>
                <input style="width: 200px; background-color:#fc7c7c;border:none ; color:black;" data-hover="Submit" type="submit"
                    name="gui_bl" value="Gửi bình luận">
            </form>
        <?php } else { ?>
            <p style=color:red;>Bạn phải đăng nhập để bình luận!</p>
        <?php } ?>
    </div>
    <?php
    if (isset($_POST['gui_bl']) && $_POST['gui_bl']) {
        $noidung = $_POST['noidung'];
        $id_sp = $_POST['id_sp'];
        $id_user = $_SESSION['user']["id_user"];
        $ngaybl = date("Y-m-d H:i:s");
        insert_bl($noidung, $id_user, $id_sp, $ngaybl);
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
    ?>
</body>

</html>