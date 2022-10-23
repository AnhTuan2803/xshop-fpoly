    <!-- ARTICLE -->
    <article class="mt-4 mb-5" style="padding-bottom: 200px;">
      <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label " style="font-weight: bold;">DANH MỤC</label>
          <select name="iddm" style="max-width: 200px; display: inline-block;" class="form-select">
          <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo '<option value="' . $id . '" >' . $name . '</option>';
            }
            ?>

          </select>
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">TÊN SẢN PHẨM</label>
          <input type="text" name="tensp" class="form-control w-50" id="formGroupExampleInput2">
        </div>

        <div class="mb-3">
          <label class="form-label" style="font-weight: bold; text-transform: uppercase;">ĐƠN giá</label>
          <input type="text" name="giasp" class="form-control w-50" />
        </div>
        <div class="mb-3 w-50">
          <label class="form-label" style="font-weight: bold; text-transform: uppercase;">HÌNH ẢNH</label>
          <div class="border" style="border-radius: 8px; padding: 6px">
            <div class="form-group">
              <input type="file" name="hinh" class="form-control-file" style="font-size: 13px; margin-left: 10px;" />
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold;">MÔ TẢ</label>
          <textarea class="form-control  w-50" name="mota" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mới"></input>
          <input type="reset" class="btn btn-danger" value="Nhập lại"></input>
          <a href="index.php?act=listsp" class="btn btn-primary">Danh sách</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
      </form>
    </article>