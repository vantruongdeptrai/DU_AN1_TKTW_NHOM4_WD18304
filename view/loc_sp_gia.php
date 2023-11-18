<?php
include("../database/pdo.php");
include("../global.php");
$selectedPrice = $_POST['price'];
$sql = "SELECT * FROM san_pham WHERE gia ";
switch ($selectedPrice) {
    case '0-10000':
        $sql = "SELECT * FROM san_pham WHERE gia > 0 AND gia <= 10000";
        break;
    case '10000-20000':
        $sql = "SELECT * FROM san_pham WHERE gia > 10000 AND gia <= 20000";
        break;
    case '20000-30000':
        $sql = "SELECT * FROM san_pham WHERE gia > 20000 AND gia <= 30000";
        break;
    default:
        $sql = "SELECT * FROM san_pham";
        break;
}
$result = pdo_query($sql);
//var_dump($result);
if (is_array($result)) {
    foreach ($result as $rs) {
        extract($rs);
        $hinh = $img_path . $hinh_anh;
        $link_sp = "index.php?act=single-product&id=" . $id_sp;
        echo '<div class="col-lg-4 col-md-4 col-sm-6">
    <article class="single_product wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <figure>
            <div class="product_thumb">
                <a href="' . $link_sp . '"><img style="widht:200px;height:200px;" src="' . $hinh . '" alt=""></a>
                <div class="action_links">
                    <ul class="d-flex justify-content-center">
                        <li class="add_to_cart"><a href="index.php?act=cart" title="Add to cart">
                                <span class="pe-7s-shopbag"></span></a></li>
                        <li class="wishlist"><a href="#" title="Add to Wishlist"><span class="pe-7s-like"></span></a>
                        </li>
                        <li class="quick_button"><a href="#" title="Xem nhanh" data-bs-toggle="modal"
                                data-bs-target="#modal_box"> <span class="pe-7s-look"></span></a></li>
                    </ul>
                </div>
            </div>
            <figcaption class="product_content text-center">
                <h4><a href="single-product.html">' . $ten_sp . '</a></h4>
                <div class="price_box">
                    <span class="current_price">' . $gia . '</span>
                </div>
            </figcaption>
        </figure>
    </article>
</div>';
    }
}
// $data = json_encode($result);
// echo $data;
?>