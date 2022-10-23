    <!-- ARTICLE -->
       <article class="mt-4 mb-5" style="padding-bottom: 200px;">
       <form action="index.php?act=adddm" method="post">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label " style="font-weight: bold;">Mã loại</label>
            <input type="text" class="form-control w-50 bg-light" id="formGroupExampleInput" placeholder="auto number" readonly>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label"  style="font-weight: bold;">Tên loại</label>
            <input type="text" name="tenloai" class="form-control w-50" id="formGroupExampleInput2">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-success" name="themmoi" value="Thêm mới"></input>
            <input type="reset"  class="btn btn-danger" value="Nhập lại"></input>
            <a href="index.php?act=listdm" class="btn btn-primary">Danh sách</a>
          </div>
          <?php 
    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
       </form>
      </article>