<!-- breadcrumbs area start -->
<div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="assets/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Products</h1>
                        <ul>
                            <li><a href="index.html">Home </a></li>
                            <li> // Shop Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- product page section start -->
    <div class="product_page_section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="product_sidebar product_widget">
                        <div class="widget__list widget_filter wow fadeInUp" data-wow-delay="0.1s"
                            data-wow-duration="1.1s">
                            <h3>Lọc sản phẩm</h3>
                            <div class="widget_filter_list mb-30">
                                <h4>Lọc sản phẩm theo size</h4>
                                <ul>
                                    <li><a href="#">Tất cả</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget__list category wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <h3>Danh mục</h3>
                            <div class="widget_category">
                                <?php 
                                    if(is_array($list_dm_home)){
                                        foreach($list_dm_home as $dm){
                                            extract($dm);
                                            echo '<ul>
                                            <li><a href="#">- '.$ten_dm.'</span></a></li>
                                        </ul>';
                                        }
                                    }
                                ?>
                                
                            </div>
                        </div>
                        <div class="widget__list wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="widget_banner">
                                <img src="assets/img/others/product-sidaber-banner.png" alt="">
                            </div>
                        </div>
                        <div class="widget__list tags wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
                            <h3>Tags</h3>
                            <div class="widget_tags">
                                <ul>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">Doughnuts</a></li>
                                    <li><a href="#">Desserts</a></li>
                                    <li><a href="#">Muffins</a></li>
                                    <li><a href="#">Doughnuts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product_page_wrapper">
                        <!--shop toolbar area start-->
                        <div class="product_sidebar_header mb-60 d-flex justify-content-between align-items-center">
                            <div class="page__amount border">
                                <p><span>12</span> Product Found of <span>30</span></p>
                            </div>
                            <div class="product_header_right d-flex align-items-center">
                                <div class="sorting__by d-flex align-items-center">
                                    <span>Sắp xếp theo</span>
                                    <form class="select_option" action="#">
                                        <select name="orderby" id="short">
                                            <option selected value="1">Mặc định</option>
                                            <option value="4">Giá từ thấp đến cao</option>
                                            <option value="5">Giá từ thấp đến cao</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="product__toolbar__btn">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="active" data-bs-toggle="tab" href="#grid" role="tab"
                                                aria-controls="grid" aria-selected="true"><i class="ion-grid"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-bs-toggle="tab" href="#list" aria-controls="list" role="tab"
                                                aria-selected="false"><i class="ion-ios-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--shop toolbar area end-->


                        <!--shop gallery start-->
                        <div class="product_page_gallery">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="grid">
                                    <div class="row grid__product">
                                        <?php 
                                            if(is_array($list_sp_home)){
                                                foreach($list_sp_home as $sp){
                                                    extract($sp);
                                                    $hinh = $img_path.$hinh_anh;
                                                    $link_sp = "index.php?act=single-product&id=".$id_sp;
                                                    echo '<div class="col-lg-4 col-md-4 col-sm-6">
                                                    <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                        data-wow-duration="1.1s">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a href="'.$link_sp.'"><img style ="widht:200px;height:200px;"
                                                                        src="'.$hinh.'" alt=""></a>
                                                                <div class="action_links">
                                                                    <ul class="d-flex justify-content-center">
                                                                        <li class="add_to_cart"><a href="cart.html"
                                                                                title="Add to cart">
                                                                                <span class="pe-7s-shopbag"></span></a></li>
                                                                        <li class="wishlist"><a href="#"
                                                                                title="Add to Wishlist"><span
                                                                                    class="pe-7s-like"></span></a></li>
                                                                        <li class="quick_button"><a href="#" title="Quick View"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#modal_box"> <span
                                                                                    class="pe-7s-look"></span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <figcaption class="product_content text-center">
                                                                <h4><a href="single-product.html">'.$ten_sp.'</a></h4>
                                                                <div class="price_box">
                                                                    <span class="current_price">'.$gia.'</span>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </article>
                                                </div>';
                                                }
                                            }
                                        ?>
                                        
                                            <!-- END -->
                                            
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="list">
                                    <div class="list__product">
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product12.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Products Name Here</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$22.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product1.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$24.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product3.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Sit amet consecte elit.</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product4.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$22.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination poduct_pagination">
                            <ul>
                                <li class="current"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><i class="ion-chevron-right"></i></a></li>
                            </ul>
                        </div>
                        <!--shop gallery end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product page section end -->