<?php 
  if (isset($_GET['idbill']) && ($_GET['idbill'] >= 0)) {
    $idbill = loadone_bill($_GET['idbill']);
include "./views/bill/update_bill.php";

}
?>