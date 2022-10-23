<?php 
 if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
    $id = $_GET['idsp'];
    $onesp = loadone_sanpham($id);
    extract($onesp);
    $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
    include "./client/views/sanpham/sanphamct.php";
} else {
    include "./client/views/page/home.php";
}
?>