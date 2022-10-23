<!-- ARTICLE -->
<article>
    <table class="table mt-4 mb-4">
        <thead class="table-success">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Nội dung</th>
                <th>IDUser</th>
                <th>IDPro</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $suabl = "index.php?act=suabl&id=" . $id;
                $xoabl = "index.php?act=xoabl&id=" . $id;
                echo '<tr>
                    <td class="pb-3 pt-3"><input type="checkbox" name="" id=""></td>
                    <td class="pb-3 pt-3">' . $id . '</td>
                    <td class="pb-3 pt-3">' . $noidung . '</td>
                    <td class="pb-3 pt-3">' . $iduser . '</td>
                    <td class="pb-3 pt-3">' . $idpro . '</td>
                    <td class="pb-3 pt-3">' . $ngaybinhluan . '</td>
                    <td class="td-opt pb-3 pt-3">
                        <a href="' . $xoabl . '" class="btn-delete">Xóa</a>
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