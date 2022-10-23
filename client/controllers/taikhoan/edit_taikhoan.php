<?php 
      if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $id = $_POST['id'];

        update_taikhoan($id, $user, $pass, $email, $address, $tel);
        $_SESSION['user'] = check_user($user, $pass);
        header('Location: index.php?act=edit_taikhoan');
    }
    include "./client/views/taikhoan/edit_taikhoan.php";
?>