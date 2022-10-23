<?php 
if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
    $email = $_POST['email'];

    $checkemail = check_email($email);
    if (is_array($checkemail)) {
        $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
    } else {
        $thongbao = "Email này không tồn tại!";
    }
}
include "./client/views/taikhoan/quenmk.php";
?>