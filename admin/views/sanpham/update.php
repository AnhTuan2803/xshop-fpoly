    <?php
    if (is_array($sanpham)) {
      extract($sanpham);
    }
    $hinhpath = "../upload/" . $img;
    if (is_file($hinhpath)) {
      $hinh = "<img src='" . $hinhpath . "' height='80px'>";
    } else {
      $hinh = "no photo";
    }
    ?>
    <!-- ARTICLE -->
    <article class="mt-4 mb-5" style="padding-bottom: 200px;">
      <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <select style="max-width: 100px; display: inline-block;" name="iddm" class="form-select" aria-label="Default select example">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              if ($iddm == $id) {
                echo '<option value="' . $id . '"selected >' . $name . '</option>';
              } else {
                echo '<option value="' . $id . '" >' . $name . '</option>';
              }
            }
            ?>

          </select>

        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Tên sản phẩm</label>
          <input type="text" name="tensp" class="form-control w-50" id="formGroupExampleInput2" value="<?= $sanpham['name'] ?>">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Giá</label>
          <input type="text" name="giasp" class="form-control w-50" id="formGroupExampleInput2" value="<?= $price ?>">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label" style="font-weight: bold;">Hình</label>
          <input type="file" name="hinh" class="form-control w-50" id="formGroupExampleInput2">
          <?= $hinh ?>
        </div>

        <div class="form-floating mb-3">
          <!-- <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Mô tả</label> -->
          <textarea name="mota" style="height: 150px;" class="form-control w-50" placeholder="Leave a comment here" id="floatingTextarea"><?= $mota ?></textarea>
          <label for="floatingTextarea">Mô tả</label>
        </div>
        <div class="form-group">
          <input type="hidden" name="id" value="<?= $sanpham['id'] ?>">
          <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật"></input>
          <input type="reset" class="btn btn-danger" value="Nhập lại"></input>
          <a href="index.php?act=listsp" class="btn btn-primary">Danh sách</a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
        ?>
      </form>
    </article>