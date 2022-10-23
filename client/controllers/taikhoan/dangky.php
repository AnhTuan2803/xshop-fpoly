<?php 
  if (isset($_POST['dangky']) && ($_POST['dangky'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    insert_taikhoan($user, $pass, $email);
    $thongbao = "Đã đăng ký thành công!";
}
include "./client/views/taikhoan/dangky.php";
?>