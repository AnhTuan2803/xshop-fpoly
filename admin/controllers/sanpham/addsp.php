<?php 
  // kiểm tra người dùng ấn vào add hay không
  if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
    $iddm = $_POST['iddm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $mota = $_POST['mota'];
    $hinh = $_FILES['hinh']['name'];
    $target_dir = "../client/upload/";
    $target_file = $target_dir . basename($_FILES['hinh']['name']);
    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
    insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
    $thongbao = "Thêm thành công!";
}
$listdanhmuc = loadall_danhmuc();
include "./views/sanpham/add.php";
?>