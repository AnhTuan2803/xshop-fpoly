<?php 
  if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_khachhang($_GET['id']);
}
$listbinhluan = loadall_taikhoan(0);
include "./views/taikhoan/dskh.php";
?>