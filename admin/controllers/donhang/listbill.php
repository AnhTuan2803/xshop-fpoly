<?php 
 if (isset($_POST['kyw']) && ($_POST['kyw']) != "") {
    $kyw = ($_POST['kyw']);
} else $kyw = "";
$listbill = loadall_bill($kyw, 0);
include "./views/bill/listbill.php";
?>