<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Giỏ hàng</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ</a></li>
                        <li> // Giỏ hàng</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<div class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product_remove">Thao tác</th>
                                    <th class="product-thumbnail">Ảnh</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th>Size</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tongtien =0;
                                global $img_path;
                                if(isset($load_chitiet_giohang)){
                                foreach ($load_chitiet_giohang as $cart) {
                                    extract($cart);
                                    $xoa_sp_gh = "index.php?act=xoa_sp_gh&id_chitiet_gh=".$id_chitiet_gh;
                                    $anhsp = $img_path . $hinh_anh;
                                    $thanhtien = (int)$so_luong * (int)$gia;
                                    $tongtien += $thanhtien;
                                    echo '<tr>
                                            
                                            <td class="product_remove">
                                                <a href="'.$xoa_sp_gh.'">
                                                    <i class="pe-7s-close" title="Remove"></i>
                                                </a>
                                            </td>
                                            
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img style="width:100px;height:100px" src="' . $anhsp . '"
                                                        alt="Cart Thumbnail">
                                                </a>
                                            </td>
                                            <td class="product-name"><a href="#">' . $ten_sp . '</a>
                                            </td>
                                            <td class="product-price"><span class="amount">' . $gia . '</span></td>
                                            <td>'.$ten_size.'</td>
                                            <td class="product_pro_button quantity">
                                                '.$so_luong.'
                                            </td>
                                            <td class="product-subtotal"><span class="amount">'.$thanhtien.'</span></td>
                                        </tr>';
                                }
                                }
                                ?>
                            </tbody>
                        </table>
                        <br>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <?php if(empty($load_chitiet_giohang)){
                                    echo '<div class="coupon2" style="margin-top:7px;">
                                    <a class="button" style="background-color:#333333;color:white;padding:13px 20px; border-radius:3px;" href="index.php?act=xoa_giohang" >Xóa giỏ hàng</a>
                                </div>';
                                }
                                ?>
                                
                                <div class="coupon2" style="margin-top:7px;">
                                    <a class="button" href="index.php?act=mua_them" value="Mua thêm hàng" 
                                    style="background-color:#333333;color:white;padding:13px 20px; border-radius:3px;margin-right:15px;">Mua thêm hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    if(!empty($load_chitiet_giohang)){
                    echo '<div class="row">
                    <div class="col-md-5 ml-auto">
                        <div class="cart-page-total">
                            <h2>Tổng số tiền</h2>
                            <ul>
                                <li>Tổng : <span>'.$tongtien.' VNĐ</span></li>
                                
                            </ul>
                            <a href="index.php?act=don_hang">Thanh toán</a>
                        </div>
                    </div>
                </div>';
            }else{
                echo '<div style="color:red;">'.$thongbao.'</div><br>';
                echo "Vui lòng mua hàng để thanh toán !";
            }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- JS
============================================ -->

<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.scrollup.min.js"></script>
<script src="assets/js/jquery.nice-select.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/mailchimp-ajax.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.zoom.min.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>


<!-- Mirrored from template.hasthemes.com/bucker/bucker/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Nov 2023 14:31:24 GMT -->

</html>