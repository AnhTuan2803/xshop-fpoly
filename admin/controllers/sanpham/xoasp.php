<?php
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_sanpham($_GET['id']);
}
$listsanpham = loadall_sanpham();
include "./views/sanpham/list-sp.php";
?>