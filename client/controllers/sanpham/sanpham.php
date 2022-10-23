<?php 
 if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
    $kyw = $_POST['kyw'];
} else {
    $kyw = "";
}

if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
    $iddm = $_GET['iddm'];
} else {
    $iddm = 0;
}
$dssp = loadall_sanpham($kyw, $iddm);
$tendm = load_ten_dm($iddm);
include "./client/views/sanpham/sanpham.php";
?>