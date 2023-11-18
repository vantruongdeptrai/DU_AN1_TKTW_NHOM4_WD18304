<?php
include("../database/pdo.php");
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
// if(is_array($result)) {
//     foreach($result as $rs){
//       extract($rs);
//       echo ''.$ten_sp.'--'.$gia.'';
//     }
//   }
$data = json_encode($result);
//echo $data;
?>