<?php
if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $sanpham = loadone_sanpham($_GET['id']);
}
$listdanhmuc = loadall_danhmuc();
include "./views/sanpham/update.php";
?>