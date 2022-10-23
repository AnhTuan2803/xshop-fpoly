<?php
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['myCart'] as $key => $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $user, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser', '$user', '$email', '$address', '$tel','$pttt','$ngaydathang', '$tongdonhang')";
    return pdo_execute_lastinsertid($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser', '$idpro', '$img', '$name','$price','$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];
        echo '<tr>
         <td><img  width=100px src="' . $hinh . '" alt=""></td>
            <td>' . $cart['name'] . '</td>
            <td>' . $cart['price'] . '</td>
            <td>' . $cart['soluong'] . '</td>
            <td>' . $cart['thanhtien'] . '</td>
 </tr>';
        $i++;
    }
    echo '
 <tr>
             <td colspan="4" table-active">Tổng đơn hàng</td>
             <td>' . $tong . '</td>
  </tr>';
}
function loadall_bill($iduser = 0)
{
    $sql = "select * from bill WHERE 1 ";
    if ($iduser > 0) $sql .= "AND `iduser`=" . $iduser;
    $sql .= " ORDER BY `id` DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}

function delete_bill($id)
{
    $sql = "delete from `bill` where id=" . $id;
    pdo_execute($sql);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = 'Đơn hàng mới';
            break;
        case '1':
            $tt = 'Đang xử lý';
            break;
        case '2':
            $tt = 'Đang giao hàng';
            break;
        case '3':
            $tt = 'Đã giao hàng';
            break;
        default:
            $tt = 'Đơn hàng mới';
            break;
    }
    return $tt;
}

function loadall_thongke()
{
    $sql = "select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
    $sql .= " from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql .= " group by danhmuc.id order by danhmuc.id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}
function get_pttt($n)
{
    switch ($n) {
        case '1':
            $pt = 'Thanh toán khi nhận hàng';
            break;
        case '2':
            $pt = 'Chuyển khoản ngân hàng ';
            break;
        case '3':
            $pt = 'Thanh toán qua ví X';
            break;
        default:
            $pt = 'Thanh toán khi nhận hàng';
            break;
    }
    return $pt;
}

