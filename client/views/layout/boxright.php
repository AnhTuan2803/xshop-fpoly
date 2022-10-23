 <!-- form login -->
 <aside class="col-sm-3 mt-3">
     <div class="login-form">
         <div class="card">
             <div class="card-header" style="font-weight: 500">TÀI KHOẢN</div>
             <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                 <form action="">
                     <div class="opt-acc">
                         <div class="wrap-customer">
                             <div class="avt-customer" style="width: 100px; height: 130px; margin:  0px auto; margin-top: 20px; border: 2px solid #cccc;">
                                 <img src="./client/views/assets/images/bob.jpg" alt="" width="100%;">
                             </div>
                             <div class="name-customer" style=" margin-top: 10px; ">
                                 <h3 class="bg-info p-1 m-3" style="text-align: center; border-radius: 3px; font-size: 15px; margin: 0 auto; padding: 0px; margin: 0px;">Xin chào: <span style="color: red;"><?= $user ?></span></h3>
                             </div>
                         </div>
                         <ul>
                             <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>

                             <li><a href="./admin/index.php">Đăng nhập Admin</a></li>

                             <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>

                             <li><a href="index.php?act=quenmk">Quên mật khẩu?</a></li>
                             <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                         </ul>
                     </div>
                 </form>
             <?php
                } else {
                ?>
                 <form action="index.php?act=dangnhap" method="POST">
                     <div class="mb-3 mt-3 px-3">
                         <label for="username" class="form-label">Tên đăng nhập:</label>
                         <input type="text" class="form-control" id="username" placeholder="Nhập username" name="user" />
                     </div>
                     <div class="mb-3 px-3">
                         <label for="pwd" class="form-label">Mật khẩu:</label>
                         <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pass" />
                     </div>
                     <div class="form-check mb-3 mx-3">
                         <label class="form-check-label" style="font-size: 14px">
                             <input class="form-check-input" type="checkbox" name="remember" />
                             Ghi nhớ tài khoản
                         </label>
                     </div>
                     <input type="submit" name="dangnhap" value="Đăng nhập" class="btn btn-primary mx-3 pb-2 mb-3 trans-04"></input>
                     <div class="opt-acc">
                         <ul>
                             <li><a href="forgot-pass.html">Quên mật khẩu ?</a></li>
                             <li><a href="index.php?act=dangky">Đăng ký tài khoản mới</a></li>
                         </ul>
                     </div>
                 </form>
             <?php
                }
                ?>
         </div>
     </div>

     <!-- list opt -->
     <div class="list-opt mt-4">
         <div class="card">
             <div class="card-header" style="border-bottom: none; font-weight: 500">
                 DANH MỤC
             </div>
             <div class="card-text">
                 <ul class="list-group" style="border-radius: inherit; border-right: none">
                     <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                            echo ' <li
                    class="list-group-item list-group-item-action"
                    style="border-left: none; border-right: none"
                  >
                    <a href="' . $linkdm . '" class="cate">' . $name . '</a>
                  </li>';
                        }
                        ?>
                 </ul>
             </div>
             <div class="card-footer" style="border-top: none">
                 <form action="index.php?act=sanpham" method="POST">
                     <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm" />
                     <!-- <input type="button" name="timkiem" class="btn btn-dark" value="Tìm kiếm"> -->
                 </form>

             </div>
         </div>
     </div>

     <!-- list top 10 -->
     <div class="top10 mt-4">
         <div class="card">
             <div class="card-header" style="font-weight: 500">
                 TOP 10 YÊU THÍCH
             </div>
             <div class="card-body">
                 <ul class="ultop10">
                     <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            $img = $img_path . $img;
                            echo ' <li class="mt-2">
                <img src="' . $img . '" alt="" style="
                         border: 1px solid #dee3e0;
                         width: 30px;
                         border-radius: 5px;
                         margin-right: 10px;
                       " />
                <a href="' . $linksp . '">' . $name . '</a>
              </li>';
                        }
                        ?>

                 </ul>
             </div>
         </div>
     </div>
 </aside>