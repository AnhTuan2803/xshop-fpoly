 <!-- container-row -->
 <div class="row">
   <!-- ARTICLE -->
   <article class="col-sm-9">
     <!-- slideshow -->
     <div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcofirm" method="post">
<div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">THÔNG TIN ĐẶT HÀNG</div>
    <div class="card-body">
        <table>
            <?php
                if(isset($_SESSION['user'])){
                    $name = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                }
                else{
                    $name = "";
                    $address =  "";
                    $email =  "";
                    $tel =  "";
                }
            ?>
            <tr>
                <td>Người đặt hàng</td>
                <td><input class="form-control" type="text" name="user" value="<?=$name?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input class="form-control" type="text" name="address" value="<?=$address?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" value="<?=$email?>"></td>
            </tr>
            <tr>
                <td>Điện thoại</td>
                <td><input class="form-control" type="text" name="tel" value="<?=$tel?>"></td>
            </tr>
        </table>
    </div>
</div>

<div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">PHƯƠNG THỨC THANH TOÁN</div>
<div class="card-body">
                <table >
                    <tr>
                        <td style="padding: 20px;"><input value="1" type=radio name="pttt" checked>   Thanh toán khi nhận hàng</td>
                        <td  style="padding: 20px;"><input value="2"  type=radio name="pttt" >   Chuyển khoản ngân hàng</td>
                        <td  style="padding: 20px;"><input value="3"  type=radio name="pttt" >   Thanh toán qua ví X</td>
                    </tr>
                </table>
            </div>
            </div>

        <div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">GIỎ HÀNG</div>
<div class="card-body">
    <table class="table table-bordered">
        <tr class="table-dark ">
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
        <?php
            $tong =0;
            $i=0;
            foreach ($_SESSION['myCart'] as $key => $cart){
                $hinh = $img_path.$cart[2];
                $ttien = $cart[3] *$cart[4];
                $tong += $ttien;
                echo '<tr>
                     <td><img  width=100px src="'.$hinh.'" alt=""></td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$ttien.'</td>
             </tr>';
             $i++;
            }
            echo '
            <tr>
                        <td colspan="4" table-active">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
             </tr>';
         ?>
    </table>
</div>
    </div>
    <div class="row mb bill">
       <input name="dongydathang" style="width:226px;margin:20px 15px 7px" class="btn btn-primary" type="submit" value="ĐỒNG Ý ĐẶT HÀNG"> 
    </div>
        </form>
        
    </article>
