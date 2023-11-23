<?php
include("../database/pdo.php");
include("../global.php");
$selectedPrice = $_POST['price'];
//$sql = "SELECT * FROM san_pham WHERE gia ";
$sql = "SELECT chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size;
    WHERE san_pham.gia";
switch ($selectedPrice) {
    case '0-10000':
        $sql = "SELECT chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
        FROM san_pham
        LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size WHERE san_pham.gia > 0 AND san_pham.gia <= 10000";
        break;
    case '10000-20000':
        $sql = "SELECT chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
        FROM san_pham
        LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size WHERE san_pham.gia > 10000 AND san_pham.gia <= 20000";
        break;
    case '20000-30000':
        $sql = "SELECT chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
        FROM san_pham
        LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size WHERE san_pham.gia > 20000 AND san_pham.gia <= 30000";
        break;
    default:
        $sql = "SELECT chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
        FROM san_pham
        LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
        LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size";
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
                <div class="price_box">
                    <span class="current_price">' . $ten_size . '</span>
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