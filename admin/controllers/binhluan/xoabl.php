<?php 
  if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_binhluan($_GET['id']);
}
$listbinhluan = loadall_binhluan(0);
include "./views/binhluan/list.php";
?>