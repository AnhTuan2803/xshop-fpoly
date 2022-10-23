<?php
session_start();
include "./client/models/pdo.php";
include "./client/models/sanpham.php";
include "./client/models/danhmuc.php";
include "./client/models/taikhoan.php";
include "./client/models/binhluan.php";
include "./client/models/donhang.php";
include "./client/views/layout/header.php";
include "./client/globol.php";

if (!isset($_SESSION['myCart'])) $_SESSION['myCart'] = [];

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            include "./client/controllers/sanpham/sanpham.php";
            break;
        case 'sanphamct':
            include "./client/controllers/sanpham/sanphamct.php";
            break;
        case 'viewcart':
            include "./client/views/cart/giohang.php";
            break;
        case 'addtocart':
            include "./client/controllers/cart/addtocart.php";
            break;
        case 'billcofirm':
            include "./client/controllers/bill/billcofirm.php";
            break;
        case 'mybill':
            include "./client/controllers/bill/mybill.php";
            break;
        case 'delcart':
            include "./client/controllers/cart/delcart.php";
            break;
        case 'bill':
            include "./client/controllers/bill/bill.php";
            break;
        case 'dangky':
            include "./client/controllers/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            include "./client/controllers/taikhoan/dangnhap.php";
            break;
        case 'edit_taikhoan':
            include "./client/controllers/taikhoan/edit_taikhoan.php";
            break;
        case 'quenmk':
            include "./client/controllers/taikhoan/quenmk.php";
            break;
        case 'gioithieu':
            include "./client/views/page/gioithieu.php";
            break;
        case 'lienhe':
            include "./client/views/page/lienhe.php";
            break;
        case 'gopy':
            include "./client/views/page/gopy.php";
            break;
        case 'hoidap':
            include "./client/views/page/hoidap.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        default:
            include "./client/views/page/home.php";
            break;
    }
} else {
    include "./client/views/page/home.php";
}
include "./client/views/layout/boxright.php";

include "./client/views/layout/footer.php";
