<?php 
      if (isset($_GET['idbill'])) {

        delete_bill($_GET['idbill']);
    } else {
        $listbill = [];
    }
    header('location:index.php?act=listbill');
?>