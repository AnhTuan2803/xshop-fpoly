<!-- ARTICLE -->
<article>
  <form class="mt-3" action="index.php?act=listsp" method="POST">
    <input style="max-width: 220px; display: inline-block;" type="text" name="kyw" class="form-control" id="exampleFormControlInput1" placeholder="....">
    <select style="max-width: 100px; display: inline-block;" name="iddm" class="form-select" aria-label="Default select example">
      <option value="0" selected>Tất cả</option>
      <?php
            foreach ($listdanhmuc as $danhmuc) {
              extract($danhmuc);
              echo '<option value="' . $id . '" >' . $name . '</option>';
            }
            ?>

    </select>
    <input type="submit" class="btn btn-dark" name="listok" value="GO">
  </form>
  <table class="table mt-4 mb-4">
    <thead class="table-success">
      <tr>
        <th></th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình</th>
        <th>Giá</th>
        <th>Lượt xem</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($listsanpham as $sanpham) {
        extract($sanpham);
        $suasp = "index.php?act=suasp&id=" . $id;
        $xoasp = "index.php?act=xoasp&id=" . $id;
        $hinhpath = "../client/upload/" . $img;
        if (is_file($hinhpath)) {
          $hinh = "<img src='" . $hinhpath. "' height='80px'>";
        } else {
          $hinh = "no photo";
        }
        echo '<tr>
                    <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
                    <td class="pb-3 pt-3">' . $id . '</td>
                    <td class="pb-3 pt-3">' . $name . '</td>
                    <td class="pb-3 pt-3">' . $hinh . '</td>
                    <td class="pb-3 pt-3">' . $price . '</td>
                    <td class="pb-3 pt-3">' . $luotxem . '</td>
                    <td class="td-opt pb-3 pt-3">
                        <a href="' . $suasp . '" class="btn-edit">Sửa</a>
                        <a href="' . $xoasp . '" class="btn-delete">Xóa</a>
                    </td>
                  </tr>';
      }
      ?>

    </tbody>
  </table>
  <div class="wrap-btn" style="display: flex; justify-content: space-between">
    <div class="form-group pb-4">
      <button class="btn btn-success">Chọn tất cả</button>
      <button class="btn btn-warning">Bỏ chọn tất cả</button>
      <button class="btn btn-danger">Xóa các mục đã chọn</button>
      <a href="index.php?act=addsp" class="btn btn-primary">Nhập thêm</a>
    </div>
    <nav aria-label="...">
      <ul class="pagination">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item " aria-current="page">
          <span class="page-link">2</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</article>