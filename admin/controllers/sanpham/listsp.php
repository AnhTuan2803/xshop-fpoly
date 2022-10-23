<?php 
           if (isset($_POST['listok']) && ($_POST['listok'])) {
            $kyw = $_POST['kyw'];
            $iddm = $_POST['iddm'];
        } else {
            $kyw = '';
            $iddm = 0;
        }
        $listdanhmuc = loadall_danhmuc();
        $listsanpham = loadall_sanpham($kyw, $iddm);
        include "./views/sanpham/list-sp.php";
?>