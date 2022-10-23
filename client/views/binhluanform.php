<?php
session_start();
include "../models/pdo.php";
include "../models/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <link rel="stylesheet" href="./client/views/assets/css/style.css">
</head>

<body>
    <!-- card -->
    <div class="card">
        <div class="card-header text-uppercase">Bình luận</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Id</th>
                        <th scope="col">Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo ' <tr><td>' . $noidung . '</td>';
                        echo '<td>' . $iduser . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="flex-ip">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">

                    <div class="ip-cmt">
                        <input type="text" name="noidung" class="form-control form-control-lg" placeholder="Nhập bình luận của bạn..." />
                    </div>
                    <div class="btn-cmt">
                        <input type="submit" name="guibinhluan" class="btn btn-dark" value="Bình luận">
                    </div>
                </div>
            </form>

        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>


</body>

</html>