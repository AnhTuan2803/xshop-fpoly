<div style="margin:20px 0px" class="card">
    <div class="card-header text-uppercase">THỐNG KÊ</div>
</div>
<!-- ARTICLE -->
<article>
    <table class="table mt-4 mb-4">
        <thead class="table-success">
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo '<tr>
                    <td class="pb-3 pt-3">' . $madm . '</td>
                    <td class="pb-3 pt-3">' . $tendm . '</td>
                    <td class="pb-3 pt-3">' . $countsp . '</td>
                    <td class="pb-3 pt-3">' . $maxprice . '</td>
                    <td class="pb-3 pt-3">' . $minprice . '</td>
                    <td class="pb-3 pt-3">' . $avgprice . '</td>
                  </tr>';
            }
            ?>

        </tbody>
    </table>
    <div class="wrap-btn" style="display: flex; justify-content: space-between">
        <div class="form-group pb-4">
            <a href="index.php?act=bieudo" class="btn btn-success">Xem biểu đồ</a>
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