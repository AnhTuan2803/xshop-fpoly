 <!-- container-row -->
 <div class="row">
   <!-- ARTICLE -->
   <article class="col-sm-9">
     <!-- slideshow -->
<div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">CÁM ƠN</div>
<div class="card-body">
            <h2>CÁM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</h2>
            </div>
            </div>
            <?php 
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
             $bill_pttt =  get_pttt($bill['bill_pttt']);
            }
            ?>
            <div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">THÔNG TIN ĐƠN HÀNG</div>
<div class="card-body">
                <li>Mã đơn hàng: DAM-<?=$bill['id'];?></li>
                <li>Ngày đặt hàng: <?=$bill['ngaydathang'];?></li>
                <li>Tổng đơn hàng: <?=$bill['total'];?></li>
                <li>Phương thức thanh toán: <?= $bill_pttt ?></li>
            </div>
            </div>
            <div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">THÔNG TIN ĐẶT HÀNG</div>
<div class="card-body">
                <table >
                    <tr>
                        <td>Người đặt hàng:</td>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <td>Điện thoại:</td>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>
            </div>
            </div>
   
        <div class="card"  style="margin-top:30px">
    <div class="card-header text-uppercase">CHI TIẾT GIỎ HÀNG</div>
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
        bill_chi_tiet($billct);
     ?>
    </table>
</div>
    </div>
 
    </article>