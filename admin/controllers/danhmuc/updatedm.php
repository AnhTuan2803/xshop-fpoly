<?php 
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $tenloai = $_POST['tenloai'];
    $id = $_POST['id'];
    update_danhmuc($id, $tenloai);
    $thongbao = "Cập nhật thành công!";
}
$listdanhmuc = loadall_danhmuc();
include "./views/danhmuc/list-category.php";
?>