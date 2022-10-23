<div class="row">
    <!-- ARTICLE -->
    <article class="col-sm-9">
        <!-- form -->
        <div class="form-customer">
            <!-- 2 thanh thông báo -->
            <div class="header-notice mb-4">
                <div class="alert alert-info text-uppercase mt-3" role="alert">
                    Cập nhật tài khoản
                </div>
            </div>
            <!-- form đăng nhập -->
            <form action="index.php?act=edit_taikhoan" method="POST" style="margin-left: 10px">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Tên đăng nhập</label>
                    <input type="text" name="user" value="<?= $user ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Mật khẩu</label>
                    <input type="password" name="pass" value="<?= $pass ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Địa chỉ</label>
                    <input type="text" name="address" value="<?= $address ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Điện thoại</label>
                    <input type="text" name="tel" value="<?= $tel ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Email</label>
                    <input type="email" name="email" value="<?= $email ?>" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <!-- <div class="form-group mb-3">
                    <label for="exampleInputEmail1" style="font-weight: bold; margin-bottom: 10px">Hình ảnh</label>
                    <input type="file" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" style="font-size: 13px; padding: 9px 25px" />
                </div> -->
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật"></input>
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
            <img src="./client/views/assets/images/update.png" alt="" style="width: 500px; height: 500px; margin-top: 100px" />
        </div>
    </article>

    <!-- ASIDE -->
 
     