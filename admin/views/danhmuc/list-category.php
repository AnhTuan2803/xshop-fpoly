<!-- ARTICLE -->
<article >
        <table class="table mt-4 mb-4">
            <thead class="table-success">
              <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=".$id;
                    $xoadm = "index.php?act=xoadm&id=".$id;
                    echo '<tr>
                    <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
                    <td class="pb-3 pt-3">'.$id.'</td>
                    <td class="pb-3 pt-3">'.$name.'</td>
                    <td class="td-opt pb-3 pt-3">
                         <a href="'.$suadm.'" class="btn-edit">Sửa</a>
                        <a href="'.$xoadm.'" class="btn-delete">Xóa</a>
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
              <a href="index.php?act=adddm" class="btn btn-primary">Nhập thêm</a>
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