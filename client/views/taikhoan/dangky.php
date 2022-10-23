<div class="row">
  <!-- ARTICLE -->
  <article class="col-sm-9">
    <!-- form -->
    <div class="form-customer">
      <!-- 2 thanh thông báo -->
      <div class="header-notice mb-4">
        <div class="alert alert-info text-uppercase mt-3" role="alert">
          Đăng ký thành viên
        </div>
      </div>
      <!-- form đăng nhập -->
      <form action="index.php?act=dangky" method="POST" style="margin-left: 10px">
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Tên đăng nhập</label>
          <input type="text" name="user" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Mật khẩu</label>
          <input type="password" name="pass" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <!-- <div class="form-group mb-3">
                <label
                  for="exampleInputEmail1"
                  style="font-weight: bold; margin-bottom: 10px"
                  >Xác nhận mật khẩu</label
                >
                <input
                  type="password"
                  class="form-control w-50"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div> -->
        <!-- <div class="form-group mb-3">
                <label
                  for="exampleInputEmail1"
                  style="font-weight: bold; margin-bottom: 10px"
                  >Họ và tên</label
                >
                <input
                  type="text"
                  class="form-control w-50"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div> -->
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Email</label>
          <input type="email" name="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>
        <!-- <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Hình ảnh</label>
                    <input type="file" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" style="font-size: 13px; padding: 9px 25px" />
                </div> -->
        <input type="submit" name="dangky" class="btn btn-primary" value="Đăng ký"></input>
      </form>
      <h6 class="m-2" style="color: red;">
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
          echo $thongbao;
        }
        ?>
      </h6>
    </div>
    <div class="img-login" style="text-align: center">
      <img src="./client/views/assets/images/forgotpass.png" alt="" style="width: 500px; height: 500px; margin-top: 100px" />
    </div>
  </article>

  <!-- ASIDE -->

 