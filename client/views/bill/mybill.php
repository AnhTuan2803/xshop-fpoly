 <!-- container-row -->
 <div class="row">
   <!-- ARTICLE -->
   <article class="col-sm-9">
     <!-- slideshow -->
<div class="card mt-3">
    <div class="card-header text-uppercase">ĐƠN HÀNG CỦA BẠN</div>
<div class="card-body">
    <table class="table table-bordered">
        <tr class="table-dark ">
            <th>MÃ ĐƠN HÀNG</th>
            <th>NGÀY ĐẶT</th>
            <th>SỐ LƯỢNG MẶT HÀNG</th>
            <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
            <th>TÌNH TRẠNG ĐƠN HÀNG</th>

        </tr>
        <?php

           if(is_array($listbill)){
            foreach($listbill as $bill){
                extract($bill);
                $ttdh = get_ttdh($bill['bill_status']);
                $countsp =loadall_cart_count($bill['id']);
                echo '<tr>
                   <td>DAM-'.$bill['id'].'</td>
                   <td>'.$bill['ngaydathang'].'</td>
                   <td>'.$countsp.'</td>
                   <td>'.$bill['total'].'</td>
                   <td>'.$ttdh.'</td>
        </tr>';
            }
           }
                
         
         ?>
    </table>
</div>
    </div>
    </article>
