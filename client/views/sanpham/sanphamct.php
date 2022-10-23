 <?php
    extract($onesp);
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $iduser = $_SESSION['user']['id'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location:" . $_SERVER['HTTP_REFERER']);
    }
    ?>
 <!-- container-row -->
 <div class="row">
     <!-- ARTICLE -->
     <article class="col-sm-9">
         <div class="wrap-article">
             <div class="img-art text-center pt-5 pb-4">
                 <img src="<?= $img = $img_path . $img ?>" alt="" width="200px;" />
             </div>
             <div class="list-detail-prd">
                 <ul>
                     <li><a href="#">Mã HH: <?= $id ?></a></li>
                     <li><a href="#">Tên HH: <?= $name ?></a></li>
                     <li><a href="#">Đơn giá: <?= $price ?></a></li>
                     <li><a href="#">Giảm giá: 0%</a></li>
                 </ul>
             </div>
             <div class="content-detail" style="padding: 0px 30px; margin: 0px; text-align: justify">
                 <p style="padding: 0px; margin: 5px 0px">
                     <?= $mota ?>
                 </p>
                 <p style="padding: 0px; margin: 5px 0px">
                     Watch S1 Active hướng đến hầu như mọi đối tượng và phong cách của
                     người dùng, dù là cổ điển hay thanh lịch, nhân viên văn phòng hay
                     dân chơi thể thao,... đều có thể sử dụng mẫu smartwatch này nhờ
                     ngoại hình tối giản nhưng không kém cá tính với những đường cắt
                     mạnh mẽ trên khung viền.
                 </p>
             </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
             <script>
                 $(document).ready(function() {
                     $("#binhluan").load("./client/views/binhluanform.php", {
                         idpro: <?= $id ?>
                     });
                 });
             </script>
             <div id="binhluan" class="comment-detail mt-5">


             </div>
             <div class="card mt-4">
                 <div class="card-header text-uppercase">Hàng cùng loại</div>

                 <div class="card-body list-same">
                     <ul style="padding: 0px 30px; margin: 0px">
                         <?php
                            foreach ($sp_cung_loai as $sp_cungloai) {
                                extract($sp_cungloai);
                                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                                echo '<li><a href="' . $linksp . '">' . $name . '</a></li>';
                            }
                            ?>
                     </ul>
                 </div>
             </div>
         </div>
     </article>
     <!-- ASIDE -->