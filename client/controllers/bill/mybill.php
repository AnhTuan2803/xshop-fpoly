<?php 
 $listbill = loadall_bill($_SESSION['user']['id']);
 include "./client/views/bill/mybill.php";
?>