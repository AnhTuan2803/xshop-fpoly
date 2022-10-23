<!-- container-row -->
<div class="row">
    <!-- ARTICLE -->
    <article class="col-sm-9">
        <div class="wrap-article">

            <div class="comment-detail mt-3">
                <!-- card 1 -->
                <div class="card">
                    <div class="card-header text-uppercase">Sản Phẩm <strong><?= $tendm ?></strong></div>
                    <div class="card-body row">
                        <!-- col -->
                        <?php
                        foreach ($dssp as $sp) {    
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            $hinh = $img_path . $img;
                            echo '<div class="col border mr-4 mt-3">
                  <div class="block-img">
                   <a href="' . $linksp . '"><img
                      src="' . $hinh . '"
                      alt=""
                      width="200px"
                      height="200px"
                      style="margin-bottom: 20px"
                    /></a>
                  </div>
                  <span>' . $price . '</span>
                  <h4><a href="' . $linksp . '">' . $name . '</a></h4>
                </div>';
                        }
                        ?>
                        <!-- end col -->
                    </div>
                </div>
            </div>
    </article>
    <!-- ASIDE -->
 