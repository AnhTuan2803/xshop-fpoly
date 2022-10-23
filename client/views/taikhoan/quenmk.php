<div class="row">
  <!-- ARTICLE -->
  <article class="col-sm-9">
    <!-- form -->
    <div class="form-customer">
      <!-- 2 thanh thông báo -->
      <div class="header-notice mb-4">
        <div class="alert alert-info text-uppercase mt-3" role="alert">
          Quên mật khẩu
        </div>
      </div>
      <!-- form đăng nhập -->
      <form action="index.php?act=quenmk" method="POST" style="margin-left: 10px">
        <div class="form-group mb-3">
          <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Email</label>
          <input type="email" name="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
        </div>

        <input type="submit" name="guiemail" class="btn btn-primary" value="Gửi"></input>
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
      <img src="./client/views/assets/images/changepass.png" alt="" style="width: 500px; height: 500px; margin-top: 100px" />
    </div>
  </article>

  <!-- ASIDE -->
