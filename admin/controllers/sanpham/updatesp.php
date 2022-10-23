<?php 
 if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $iddm = $_POST['iddm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $mota = $_POST['mota'];
    $hinh = $_FILES['hinh']['name'];
    $target_dir = "../upload/";
    $target_file = $target_dir . basename($_FILES['hinh']['name']);
    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
    update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);
    $thongbao = "Cập nhật thành công!";
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham();
include "./views/sanpham/list-sp.php";
?>