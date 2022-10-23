<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $ttdh = $_POST['ttdh'];
    $id = $_POST['id'];
    update_bill($id, $ttdh);
    $thongbao = "Cập nhật thành công!";
}
$listbill = loadall_bill();
include "./views/bill/listbill.php";
?>