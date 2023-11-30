<?php
include("../database/pdo.php");
include("../global.php");
$selectedSize = $_POST['size'];
$sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm
    ";
switch ($selectedSize) {
    case 'XL':
        $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size 
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm
    WHERE size.ten_size = 'XL'
    ";
        break;
    case 'L':
        $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE size.ten_size = 'L'
    ";
        break;
    case 'M':
        $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE size.ten_size = 'M';
    ";
        break;
    case 'S':
        $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm WHERE size.ten_size = 'S';
    ";
        break;
    default:
    $sql = "SELECT danh_muc.id_dm,chi_tiet_sp.id_ctsp , chi_tiet_sp.so_luong , san_pham.id_sp, san_pham.ten_sp ,san_pham.gia , san_pham.hinh_anh , san_pham.mo_ta , size.ten_size
    FROM san_pham
    LEFT JOIN chi_tiet_sp ON san_pham.id_sp = chi_tiet_sp.id_sp
    LEFT JOIN size ON size.id_size = chi_tiet_sp.id_size
    LEFT JOIN danh_muc ON danh_muc.id_dm = san_pham.id_dm
    ";
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
        <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
            data-wow-duration="1.1s">
            <form action="index.php?act=add_to_cart" method="post">
                <input type="hidden" name="id_ctsp" value="'.$id_ctsp.'">
                <input type="hidden" name="ten_sp" value="'.$ten_sp.'">
                <input type="hidden" name="gia" value="'.$gia.'">
                <input type="hidden" name="hinh" value="'.$hinh.'">
                <input type="hidden" name="ten_size" value="'.$ten_size.'">
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
    </div>';
    }
}
// $data = json_encode($result);
// echo $data;
?>