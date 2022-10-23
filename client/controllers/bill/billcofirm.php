<?php 
if (isset($_POST['dongydathang'])) {
    if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
    else $iduser = 0;
    $user = $_POST['user'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $pttt = $_POST['pttt'];
    $ngaydathang = date('h:i:sa d/m/Y');
    $tongdonhang = tongdonhang();
    $idbill = insert_bill($iduser, $user, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
    foreach ($_SESSION['myCart'] as $cart) {
        insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
    }
    $bill = loadone_bill($idbill);
    $billct = loadall_cart($idbill);
    $_SESSION['cart'] = [];
    include "./client/views/bill/billcofirm.php";
}
?>