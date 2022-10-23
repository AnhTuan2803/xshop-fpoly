<div style="margin:20px 0px" class="card">
    <div class="card-header text-uppercase">DANH SÁCH ĐƠN HÀNG</div>
</div>

<form action="index.php?act=listbill" method="POST" class="row g-3">
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Tìm mã đơn hàng</label>
        <input type="text" name="kyw" class="form-control" id="inputPassword2" placeholder="....">
    </div>
    <div class="col-auto">
        <input type="submit" name="listok" class="btn btn-primary mb-3" value="Tìm kiếm"></input>
    </div>
</form>
<div class="card">
    <div class="card-header text-uppercase">GIỎ HÀNG</div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr class="table-dark">
                <th></th>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Số lượng hàng</th>
                <th>Giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Thao tác</th>
            </tr>
            <?php
            $i = 0;
            foreach ($listbill as $bill) {
                extract($bill);
                $suasp = '<a href="index.php?act=sua_bill&idbill=' . $id . '"><input class="btn btn-primary mr-4" type="button" value="Sửa"></a>';
                $xoasp = '<a href="index.php?act=del_bill&idbill=' . $id . '"><input class="btn btn-primary" type="button" value="Xóa"></a>';
                $khachhang = $bill["bill_name"] . '
                <br>' . $bill["bill_email"] . '
                <br>' . $bill["bill_address"] . '
                <br> ' . $bill["bill_tel"];
                $ttdh = get_ttdh($bill['bill_status']);
                $countsp = loadall_cart_count($bill["id"]);
                echo '<tr>
                     <td><input type="checkbox"> </td>
                        <td>DAM-' . $bill['id'] . '</td>
                        <td> ' . $khachhang . '</td>
                        <td>' . $countsp . '</td>
                        <td><strong>' . $bill["total"] . '</strong></td>
                        <td>' . $ttdh . '</td>
                        <td>' . $suasp . $xoasp . '</td>
             </tr>';
                $i++;
            }

            ?>
        </table>