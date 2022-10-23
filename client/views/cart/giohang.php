 <!-- container-row -->
 <div class="row">
     <!-- ARTICLE -->
     <article class="col-sm-9 mt-3">
         <!-- slideshow -->

         <div class="card">
             <div class="card-header text-uppercase">GIỎ HÀNG</div>
             <div class="card-body">
                 <table class="table table-bordered">
                     <tr class="table-dark">
                         <th>Hình</th>
                         <th>Sản phẩm</th>
                         <th>Đơn giá</th>
                         <th>Số lượng</th>
                         <th>Thành tiền</th>
                         <th>Thao tác</th>
                     </tr>
                     <?php
                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['myCart'] as $key => $cart) {
                            $hinh = $img_path . $cart[2];
                            $ttien = $cart[3] * $cart[4];
                            $tong += $ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" class="btn btn-primary" value="Xóa"></a>';
                            echo '<tr>
                     <td><img width=100px src="' . $hinh . '" alt=""></td>
                        <td>' . $cart[1] . '</td>
                        <td>' . $cart[3] . '</td>
                        <td>' . $cart[4] . '</td>
                        <td>' . $ttien . '</td>
                        <td>' . $xoasp . '</td>
             </tr>';
                            $i++;
                        }
                        echo '
            <tr>
                        <td colspan="4" table-active">Tổng đơn hàng</td>
                        <td>' . $tong . '</td>
                        <td> <a href="index.php?act=delcart"><input type="button" class="btn btn-primary" value="XÓA TẤT CẢ"></a></td>
             </tr>';
                        ?>
                 </table>
             </div>
         </div>
         <div class="row mb bill">
             <a href="index.php?act=bill"> <input style="width:226px;margin:20px 15px 7px" type="submit" class="btn btn-primary" value="ĐẶT HÀNG"> </a>
         </div>
     </article>