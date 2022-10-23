 <!-- container-row -->
 <div class="row">
   <!-- ARTICLE -->
   <article class="col-sm-9">
     <!-- slideshow -->
     <div class="slide-show mt-3">
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="./client/views/assets/images/slide1.jpg" class="d-block w-100" alt="..." style="height: 500px" />
           </div>
           <div class="carousel-item">
             <img src="./client/views/assets/images/slide2.jpg" class="d-block w-100" alt="..." style="height: 500px" />
           </div>
           <div class="carousel-item">
             <img src="./client/views/assets/images/slide3.jpg" class="d-block w-100" alt="..." style="height: 500px" />
           </div>
           <div class="carousel-item">
             <img src="./client/views/assets/images/slide4.jpg" class="d-block w-100" alt="..." style="height: 500px" />
           </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
       </div>
     </div>
     <!-- product -->
     <div class="container text-center">
       <!-- row -->
       <div class="row mt-3">
         <!-- col -->
         <?php
          foreach ($spnew as $sp) {
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
                  <div class="row btnaddtocart">
                  <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="img" value="'. $img .'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="submit" class="btn btn-primary" name="addtocart" value="Thêm vào giỏ hàng">
                  </form>
                 </div>
                </div>';
          }
          ?>
         <!-- end col -->
       </div>
     </div>
   
   </article>
   <!-- ASIDE -->
   