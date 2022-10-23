<?php
include "./models/pdo.php";
include "./models/danhmuc.php";
include "./models/sanpham.php";
include "./models/taikhoan.php";
include "./models/thongke.php";
include "./models/donhang.php";
include "./models/binhluan.php";
include "./views/layout/header.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra người dùng ấn vào add hay không
            include "./controllers/danhmuc/addm.php";
            break;
        case 'listdm':
            include "./controllers/danhmuc/listdm.php";
            break;
        case 'xoadm':
            include "./controllers/danhmuc/xoadm.php";
            break;
        case 'suadm':
            include "./controllers/danhmuc/suadm.php";
            break;
        case 'updatedm':
            include "./controllers/danhmuc/updatedm.php";
            break;
            // controller cho sản phẩm
        case 'addsp':
            include "./controllers/sanpham/addsp.php";
            break;
        case 'listsp':
            include "./controllers/sanpham/listsp.php";
            break;
        case 'xoasp':
            include "./controllers/sanpham/xoasp.php";
            break;
        case 'suasp':
            include "./controllers/sanpham/suasp.php";
            break;
        case 'updatesp':
            include "./controllers/sanpham/update.php";
            break;
        case 'dskh':
            include "./controllers/taikhoan/dskh.php";
            break;
        case 'listbill':
            include "./controllers/donhang/listbill.php";
            break;
        case 'del_bill':
            include "./controllers/donhang/del_bill.php";
            break;
        case 'sua_bill':
            include "./controllers/donhang/sua_bill.php";
            break;
        case 'update_bill':
                include "./controllers/donhang/update_bill.php";
                break;
        case 'updatebl':
            include "./controllers/binhluan/updatebl.php";
            break;
        case 'dsbl':
            include "./controllers/binhluan/dsbl.php";
            break;
        case 'xoabl':
            include "./controllers/binhluan/xoabl.php";
            break;
        case 'thongke':
            include "./controllers/thongke/thongke.php";
            break;
        case 'bieudo':
            include "./controllers/thongke/bieudo.php";
            break;
            case 'xoatk':
                include "./controllers/taikhoan/xoakh.php";
                break;
        default:
            include './views/home/home.php';
            break;
    }
} else {
    include './views/home/home.php';
}

include "./views/layout/footer.php";
