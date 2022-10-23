<?php
if (is_array($idbill)) {
    extract($idbill);
}
?>
<!-- ARTICLE -->
<article class="mt-4 mb-5" style="padding-bottom: 200px;">
    <form action="index.php?act=update_bill" method="post">

        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label" style="font-size: 18px; font-weight: bold;">Trạng thái đơn hàng</label>
            <select name="ttdh" class="form-select" style="max-width: 200px;" value="<?php if (isset($ttdh) && ($ttdh != "")) echo $ttdh ?>">
                <option value="0">Đơn hàng mới</option>
                <option value="1">Đang xử lý</option>
                <option value="2">Đang giao hàng</option>
                <option value="3">Đã giao hàng</option>
            </select>
            <div class="form-group mt-4">
                <input type="hidden" name="id" value="<?php if (isset($idbill) && ($idbill > 0)) echo $id ?>">
                <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật"></input>
                <a href="index.php?act=listbill" class="btn btn-primary">Danh sách</a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
    </form>
</article>