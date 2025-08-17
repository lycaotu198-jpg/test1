<!DOCTYPE html>
<html lang="en">

<?php include('Head.php') ?>

<body>
    <!-- Topbar Start -->
 <?php include('Topbar.php') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
<?php include('Navbar.php') ?>
    <!-- Navbar End -->

    <!-- Shop Detail Start -->
        <?php

          $select = $getdata->select_allIDSP($_GET['id']);
          foreach ($select as $product)
          {
          ?>
        <div class="container-fluid pb-5">
        <form method="post">
            <input type="hidden" name="product_id" value="<?php echo $product['ma_san_pham']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $product['ten_san_pham']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $product['gia']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $product['hinh_anh']; ?>">
            <input type="hidden" name="product_mota" value="<?php echo $product['mo_ta']; ?>">
        <div class="row px-xl-5">
            <div class="col-lg-5 mb-30">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="img/images/<?php echo $product['hinh_anh']; ?>" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $product['ten_san_pham']; ?></h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1"><?php echo $product['so_like']; ?></small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4"><?php echo number_format($product['gia'], 0, ',', '.'); ?> VND</h3>
                    <p class="mb-4"><?php echo $product['mo_ta']; ?></p>
                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Độ tuổi</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <label class="" for="size-1"><?php echo $product['do_tuoi_phu_hop']; ?></label>
                            </div>
                            
                        </form>
                    </div>
                    <div class="d-flex mb-4">
                        <strong class="text-dark mr-3">Kho còn</strong>
                        <form>
                        <div class="custom-control custom-radio custom-control-inline">
                                <label class="" for="size-1"><?php echo $product['so_luong']; ?></label>
                            </div>
                            
                        </form>
                    </div>
                    
                    <div class="d-flex align-items-center mb-4 pt-2">
                        <div class="input-group quantity mr-3" style="width: 130px;">
                           
                            <input type="number" name="quantity" class="form-control bg-secondary border-0 text-center" value="1">
                            
                        </div>
                        <?php if (isset($_SESSION['username'])): ?>
                            <button class="btn btn-primary px-3" type="submit" name="themmoi"><i class="fa fa-shopping-cart mr-1"></i> Thêm vào giỏ hàng</button>  
                        <?php else: ?>
                            <button class="btn btn-primary px-3" type="submit"  onclick="alert('Bạn cần đăng nhập để thêm vào giỏ hàng'); return false;"><i class="fa fa-shopping-cart mr-1"></i> Thêm vào giỏ hàng</button>  
                        <?php endif; ?>
                    </div>
                    </form>
                    <?php } ?>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Chia sẻ cho bạn bè:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Có thể bé thích</span></h2>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                <?php
                $select=$getdata->select_top10SPmoi();
                foreach($select as $se_pro)
                {
                ?>
                    <div class="product-item bg-light">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/images/<?php echo $se_pro['hinh_anh'] ?>" alt="">
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href="chitietSP.php?id=<?php echo $se_pro['ma_san_pham'] ?>"><i class="fa fa-shopping-cart"></i></a>
                                <!-- Like bằng JavaScript -->
                                <a class="btn btn-outline-dark btn-square" onclick="likeProduct(<?php echo $se_pro['ma_san_pham']; ?>)" ><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href="chitietSP.php?id=<?php echo $se_pro['ma_san_pham'] ?>"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="chitietSP.php?id=<?php echo$se_pro['ma_san_pham'] ?>"><?php echo $se_pro['ten_san_pham'] ?></a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5><?php echo number_format($se_pro['gia'], 0, ',', '.'); ?> VND</h5><h6 class="text-muted ml-2"><del></del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                   <small><i class="far fa-heart"></i> <span id="like-count-<?php echo $se_pro['ma_san_pham']; ?>"><?php echo $se_pro['so_like'] ?></span></small> /
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small><?php echo $se_pro['do_tuoi_phu_hop'] ?></small>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <script>
            function likeProduct(id) {
                fetch('like.php?id=' + id)
                    .then(response => response.text())
                    .then(data => {
                        if (data === 'success') {
                            // Tăng số like hiển thị
                            const countElement = document.getElementById('like-count-' + id);
                            const currentLikes = parseInt(countElement.innerText);
                            countElement.innerText = currentLikes + 1;
                        } else {
                            alert('Like thất bại!');
                        }
                    })
                    .catch(error => {
                        alert('Có lỗi xảy ra!');
                        console.error(error);
                    });
            }
        </script>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <?php include('Footer.php') ?>
</body>

</html>
<?php 
if (isset($_POST['themmoi'])) {
    // Kiểm tra nếu số lượng trống hoặc không hợp lệ
    if (empty($_POST['quantity']) || $_POST['quantity'] <= 0) {
        echo "<script>alert('Vui lòng điền số lượng hợp lệ');</script>";
    } else {
        // Lấy thông tin sản phẩm từ form
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $quantity = $_POST['quantity'];
        $product_image = $_POST['product_image'];
        $product_mota = $_POST['product_mota'];

            if ($product['so_luong'] >= $quantity) 
            {

              $getdata->update_soluong( $quantity,$product_id);
            
                if (!isset($_SESSION['cart']))
                {
                    $_SESSION['cart'] = [];
                }

                
                $timsp = false;
                foreach ($_SESSION['cart'] as &$item) 
                {
                    if ($item['id'] == $product_id) {
                        $item['quantity'] += $quantity; 
                        $timsp = true;
                        break; 
                    }
                   
                }
                if (!$timsp) 
                {
                    $_SESSION['cart'][] = [
                        'id' => $product_id,
                        'name' => $product_name,
                        'price' => $product_price,
                        'quantity' => $quantity,
                        'image' => $product_image,
                        'mota'=>$product_mota
                    ];
                }
                echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng');  </script>";
            }
            else {
              echo "<script>alert('Số lượng không đủ trong kho, Kho còn lại: " . $product['so_luong'] . "'); </script>";
          }
       
    }
}
?>