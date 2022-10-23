<?php 
   if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $dm = loadone_danhmuc($_GET['id']);
}
include "./views/danhmuc/update.php";
?>