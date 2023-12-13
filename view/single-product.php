<?php
if (is_array($load_one_ctsp)) {
    extract($load_one_ctsp);
    $hinh = $img_path . $hinh_anh;
}
?>
<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="assets/img/others/breadcrumbs-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs_text">
                    <h1>Chi tiết sản phẩm</h1>
                    <ul>
                        <li><a href="index.html">Trang chủ </a></li>
                        <li> // Chi tiết sản phẩm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<?php if (is_array($load_one_ctsp)) {
    extract($load_one_ctsp);
    $hinh = $img_path . $hinh_anh;
    $link_sp = "index.php?act=single-product&id=" . $id_sp;
    echo '<form action="index.php?act=add_to_cart" method="post">

        <input type="hidden" name="id_ctsp" value="' . $id_ctsp . '">
        <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
        <input type="hidden" name="gia" value="' . $gia . '">
        <input type="hidden" name="hinh" value="' . $hinh . '">
        <input type="hidden" name="ten_size" value="' . $ten_size . '">
    
        <!-- single product section start-->
        <div class="single_product_section mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single_product_gallery">
                            <div class="product_gallery_main_img">
                                <img style=" margin-left:50px;"
                                            src="' . $hinh . '" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product_details_sidebar">
                            <h2 class="product__title"> Tên sản phẩm : 
                                ' . $ten_sp . '
                            </h2>
                            <div class="price_box">
                                <span class="current_price"> Giá : 
                                    ' . $gia . '
                                </span>
                            </div>
                            <div class="price_box">
                                <span class="current_price"> Size :
                                    ' . $ten_size . '
                                </span>
                            </div>
                            <div class="quickview__info mb-0">
                                <p class="product_review d-flex align-items-center">
                                    <span class="review_icon d-flex">
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                        <i class="ion-ios-star"></i>
                                    </span>
                                    <span class="review__text"> (5 reviews)</span>
                                </p>
                            </div>
                            <div class="product_pro_button quantity d-flex align-items-center">
                                <div class="pro-qty border">
                                    <input type="text" value="1" name="so_luong">
                                </div>
                                <!-- <a  href="#"></a> -->
                                <input style="margin-left:10px; background-color:#243a6e; color:white; border:none; padding:10px; border-radius:5px;" class="add_to_cart" type="submit" name="add_to_cart" value="Thêm vào giỏ hàng">
                            </div>
                            <div class="product_paypal">
                                <img src="assets/img/others/paypal.png" alt="payments">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>';
}
?>

<!-- product details section end-->

<!-- product tab section start -->
<div class="product_tab_section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_tab_navigation">
                    <ul class="nav justify-content-center">
                        <li>
                            <a class="active" data-bs-toggle="tab" href="#description" aria-controls="description">Mô
                                tả</a>
                        </li>

                        <li>
                            <a data-bs-toggle="tab" href="#reviews" aria-controls="reviews">Nhận xét</a>
                        </li>
                    </ul>
                </div>
                <div class="product_page_content_inner tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="product_tab_desc">
                            <p>
                                <?php echo $mo_ta ?>
                            </p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="reviews__wrapper">
                            <h2>Bình luận về sản phẩm của khách hàng </h2>
                            <script>
                                $(document).ready(function () {

                                    $("#binhluan").load("view/binhluanform.php", {
                                        id_sp: <?= $id_sp ?>
                                    });
                                });
                            </script>
                            <div id="binhluan">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product tab section end -->

<!-- product section start -->
<div class="product_section mb-80">
    <div class="container">
        <div class="section_title text-center mb-55">
            <h2>Sản phẩm cùng loại</h2>
        </div>
        <div class="row grid__product">
            <?php
            if (is_array($sp_cungloai)) {
                foreach ($sp_cungloai as $sp) {
                    extract($sp);
                    $hinh = $img_path . $hinh_anh;
                    $link_sp = "index.php?act=single-product&id=" . $id_ctsp;
                    echo '
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                    <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                        data-wow-duration="1.1s">
                                                        <form action="index.php?act=add_to_cart" method="post">
                                                            <input type="hidden" name="id_ctsp" value="' . $id_ctsp . '">
                                                            <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                                                            <input type="hidden" name="gia" value="' . $gia . '">
                                                            <input type="hidden" name="hinh" value="' . $hinh . '">
                                                            <input type="hidden" name="ten_size" value="' . $ten_size . '">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a href="' . $link_sp . '"><img style ="widht:200px;height:200px;"
                                                                        src="' . $hinh . '" alt=""></a>
                                                                <div class="action_links">
                                                                    <ul class="d-flex justify-content-center">
                                                                        <li class="add_to_cart">
                                                                        <span><input style="height:50px;background-color:#2b4174;color:#FFF; border:none;" class="pe-7s-shopbag" type="submit" name="add_to_cart" value="Thêm vào giỏ hàng"></span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <figcaption class="product_content text-center">
                                                                <h4><a href="single-product.html">Tên sản phẩm : ' . $ten_sp . '</a></h4>
                                                                <div>
                                                                    <span> Giá : ' . $gia . ' VNĐ</span>
                                                                </div>
                                                                <div>
                                                                    <span> Size : ' . $ten_size . '</span>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                        </form>
                                                    </article>
                                                </div>
                                                ';
                }
            }

            ?>
        </div>
    </div>
</div>
<!-- product section end -->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="ion-android-close"></i></span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="single-product.html"><img src="assets/img/product/product2.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product3.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="assets/img/product/product4.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Donec Ac Tempus</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
                                        iste
                                        laborum ad impedit pariatur esse optio tempora sint ullam autem
                                        deleniti nam
                                        in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam,
                                        rerum vel
                                        recusandae </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">S</option>
                                            <option value="1">M</option>
                                            <option value="1">L</option>
                                            <option value="1">XL</option>

                                        </select>
                                    </div>
                                    <!-- Thêm vào giỏ hàng -->


                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="1" max="100" step="1" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>


                                    <!-- Thêm vào giỏ hàng -->
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus"><a href="#"><i class="ion-social-googleplus"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="#"><i class="ion-social-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->