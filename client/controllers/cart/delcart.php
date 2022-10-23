<?php 
 if (isset($_GET['idcart'])) {
    array_splice($_SESSION['myCart'], $_GET['idcart'], 1);
} else {
    $_SESSION['myCart'] = [];
}
header('location:index.php?act=viewcart');
?>