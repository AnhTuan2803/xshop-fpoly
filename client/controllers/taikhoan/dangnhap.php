<?php 
  if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $check_user = check_user($user, $pass);
    if (is_array($check_user)) {
        $_SESSION['user'] = $check_user;
        // $thongbao = "Bạn đã đăng nhập thành công!";
        header('Location: index.php');
    } else {
        $thongbao = "Tài khoản không tồn tại!";
    }
}
include "./client/views/taikhoan/dangky.php";
?>