<?php include('Head.php') ?>
<!DOCTYPE html>
<html lang="en">

<body>
  <?php include('Topbar.php') ?>
  <?php include('Navbar.php') ?>

  <div class="container-fluid">
    <div class="row px-xl-4">
      <div class="col-lg-12 col-md-13">
         <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">KẾT QUẢ TÌM KIẾM</span></h5>
        <div class="row pb-4">
          <div class="col-12 pb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div>
                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
              </div>
              <div class="ml-2">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Latest</a>
                    <a class="dropdown-item" href="#">Popularity</a>
                    <a class="dropdown-item" href="#">Best Rating</a>
                  </div>
                </div>
                <div class="btn-group ml-2">
                  <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">10</a>
                    <a class="dropdown-item" href="#">20</a>
                    <a class="dropdown-item" href="#">30</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
          $get_data = new DATA();
          if(empty($_GET['key']))
          {echo "<script> alert ('bạn hãy nhập vào từ khóa');</script>";}
          else{
            if (isset($_GET['key'])) {
              $key = $_GET['key'];
              $products = $get_data->timSP($key);
          } else {
            echo "<div class='col-12'><h5>Không tìm thấy sản phẩm nào.</h5></div>";
          }
          }
          
          if (empty($products)) {
              echo "<div class='col-12'><h5>Không tìm thấy sản phẩm nào.</h5></div>";
          } else {
              foreach ($products as $product):
          ?>
          <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
              <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/images/<?php echo $product['hinh_anh']; ?>" alt="">
                <div class="product-action">
                  <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                  <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                  <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                  <a class="btn btn-outline-dark btn-square" href="chitietSP.php?id=<?php echo $product['ma_san_pham']; ?>"><i class="fa fa-search"></i></a>
                </div>
              </div>
              <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="chitietSP.php?id=<?php echo $product['ma_san_pham']; ?>">
                  <?php echo $product['ten_san_pham']; ?>
                </a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                  <h5><?php echo number_format($product['gia'], 0, ',', '.'); ?> VND</h5>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small>(99)</small>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; } ?>

        </div>
      </div>
    </div>
  </div>

  <?php include('Footer.php') ?>
</body>

</html>
