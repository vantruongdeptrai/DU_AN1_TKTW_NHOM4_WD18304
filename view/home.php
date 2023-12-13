<!--slide banner section start-->
<div class="hero_banner_section d-flex align-items-center mb-110">
    <div class="container">
        <div class="hero_banner_inner">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hero_content">
                        <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s"><span>70%</span>
                            Sale Off</h3>
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Quality Products
                            Bakery Items</h1>
                        <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                            href="index.php?act=shop-left-sidebar">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero_shape_banner">
                        <img class="banner_keyframes_animation wow" src="assets/img/bg/hero-banner-shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero_mini_shape shape1">
        <img src="assets/img/others/hero-mini-shape1.png" alt="">
    </div>
    <div class="hero_mini_shape shape2">
        <img src="assets/img/others/hero-mini-shape2.png" alt="">
    </div>
    <div class="hero_mini_shape shape3">
        <img src="assets/img/others/hero-mini-shape3.png" alt="">
    </div>
    <div class="hero_mini_shape shape4">
        <img src="assets/img/others/hero-mini-shape4.png" alt="">
    </div>
    <div class="hero_mini_shape shape5">
        <img src="assets/img/others/hero-mini-shape5.png" alt="">
    </div>
</div>
<!--slider area end-->
<!-- service section start-->
<div class="service_section mb-86">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services_section_inner d-flex justify-content-between">

                    <!-- ====================DANH MỤC SẢN PHẨM  ==================-->


                    <?php
                    if (is_array($list_dm_home)) {
                        foreach ($list_dm_home as $dm) {
                            extract($dm);
                            echo '<div>
                                        <div class="services_thumb">
                                        <img src="assets/img/others/services1.png" alt="">
                                    </div>
                                    <div class="services_content">
                                        <h3><a href="index.php?act=shop-left-sidebar">' . $ten_dm . '</a></h3>
                                        
                                    </div>
                                    </div>';
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- service section end-->

<!-- banner section  start -->
<div class="banner_section mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single_banner wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="banner_thumb">
                        <a href="#"><img src="assets/img/bg/banner1.png" alt=""></a>
                        <div class="banner_text">
                            <h3><span>70%</span> Sale Off</h3>
                            <h2>Best Quality <br>
                                Products</h2>
                            <a class="btn btn-link" href="index.php?act=shop-left-sidebar">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single_banner wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                    <div class="banner_thumb">
                        <a href="#"><img src="assets/img/bg/banner2.png" alt=""></a>
                        <div class="banner_text">
                            <h3><span>25%</span> Sale Off</h3>
                            <h2>Hot & Spicy <br>
                                Pastry</h2>
                            <a class="btn btn-link" href="index.php?act=shop-left-sidebar">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner section  end -->

<!-- product section start -->
<div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
    <div class="container">
        <div class="product_header">
            <div class="section_title text-center">
                <h2>New Products</h2>
            </div>
            <div class="product_tab_button">
                <ul class="nav justify-content-center" role="tablist" id="nav-tab">
                    <li>
                        <a class="active" data-toggle="tab" href="#features" role="tab" aria-controls="features"
                            aria-selected="false">Our Features </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#seller" role="tab" aria-controls="seller" aria-selected="false">
                            Best Sellers </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">New
                            Items </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content product_container">

            <!-- SẢN PHẨM ĐẶC TRƯNG -->

            <div class="tab-pane fade show active" id="features" role="tabpanel">
                <div class="product_gallery">
                    <div class="row">
                        <?php
                        if (is_array($load_ctsp)) {
                            foreach ($load_ctsp as $sp) {
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

            <!-- SẢN PHẨM SALE -->

            <div class="tab-pane fade" id="seller" role="tabpanel">
                <div class="product_gallery">
                    <div class="row">
                        <?php
                        if (is_array($load_ctsp)) {
                            foreach ($load_ctsp as $sp) {
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

            <!-- SẢN PHẨM NEW -->

            <div class="tab-pane fade" id="sales" role="tabpanel">
                <div class="product_gallery">
                    <div class="row">
                        <?php
                        if (is_array($load_ctsp)) {
                            foreach ($load_ctsp as $sp) {
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
            <!-- === -->
        </div>
    </div>
</div>
<!-- product section end -->

<!-- banner fullwidth section start -->
<div class="banner_fullwidth_section mb-105 " data-bgimg="assets/img/bg/banner-fullwidth1.png">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_discount_text text-center">
                    <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s"><span>45%
                        </span> Sale
                        Off</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Best Quality
                        Bakery
                        Products</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">Lorem ipsum
                        dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut
                        labore et
                        dolore magna</p>
                    <a class="btn btn-link wow fadeInUp" href="index.php?act=shop-left-sidebar" data-wow-delay="0.3s"
                        data-wow-duration="1.3s">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner fullwidth section end -->

<!-- brand section start -->
<div class="brand_section_area mb-100 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_inner slick__activation" data-slick='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,  
                        "responsive":[  
                          {"breakpoint":992, "settings": { "slidesToShow": 4 } },  
                          {"breakpoint":768, "settings": { "slidesToShow": 3 } }, 
                          {"breakpoint":576, "settings": { "slidesToShow": 2 } }, 
                          {"breakpoint":300, "settings": { "slidesToShow": 1 } }  
                         ]                                                     
                    }'>
                    <div class="single_brand ">
                        <a class="primary" href="#"><img src="assets/img/others/brand1.png" alt=""></a>
                        <a class="secondary" href="#"><img src="assets/img/others/brand-hover1.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a class="primary" href="#"><img src="assets/img/others/brand2.png" alt=""></a>
                        <a class="secondary" href="#"><img src="assets/img/others/brand-hover2.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a class="primary" href="#"><img src="assets/img/others/brand3.png" alt=""></a>
                        <a class="secondary" href="#"><img src="assets/img/others/brand-hover3.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a class="primary" href="#"><img src="assets/img/others/brand4.png" alt=""></a>
                        <a class="secondary" href="#"><img src="assets/img/others/brand-hover4.png" alt=""></a>
                    </div>
                    <div class="single_brand">
                        <a class="primary" href="#"><img src="assets/img/others/brand5.png" alt=""></a>
                        <a class="secondary" href="#"><img src="assets/img/others/brand-hover5.png" alt=""></a>
                    </div>
                    <div class="single_brand ">
                        <a class="primary" href="#"><img src="assets/img/others/brand1.png" alt=""></a>
                        <a class="secondary" href="#"><img src="assets/img/others/brand-hover1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand section end -->

<!-- blog section start -->
<div class="blog_section mb-90">
    <div class="container">
        <div class="section_title text-center wow fadeInUp mb-50" data-wow-delay="0.1s" data-wow-duration="1.1s">
            <h2>Latest Blog</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor
                incididunt ut
                labore et dolore magna</p>
        </div>
        <div class="row blog_inner slick__activation" data-slick='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "arrows": false,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,  
                "responsive":[  
                  {"breakpoint":992, "settings": { "slidesToShow": 2 } },  
                  {"breakpoint":576, "settings": { "slidesToShow": 1 } }  
                 ]                                                     
            }'>
            <div class="col-lg-4">
                <div class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <div class="blog_thumb">
                        <a href="index.php?act=blog-detail-left-sidebar"><img src="assets/img/blog/blog1.png"
                                alt=""></a>
                    </div>
                    <div class="blog_content">
                        <div class="blog_arrow_btn">
                            <a href="index.php?act=blog-detail-left-sidebar"><i class="ion-arrow-right-c"></i></a>
                        </div>
                        <span>Brakery</span>
                        <h3><a href="index.php?act=blog-detail-left-sidebar">Lorem ipsum doloril
                                sit amet consepy.</a></h3>
                        <div class="blog__meta d-flex align-items-center">
                            <div class="blog__meta__thumb">
                                <img src="assets/img/others/meta-img1.png" alt="">
                            </div>
                            <div class="blog__meta__text">
                                <ul class="d-flex">
                                    <li>By: Admin</li>
                                    <li><i class="icofont-calendar"></i> 22 Aug, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- blog section end -->
<?php
//include "";
?>