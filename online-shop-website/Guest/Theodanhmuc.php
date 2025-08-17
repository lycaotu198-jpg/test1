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

 


    <!-- Shop Start -->
    <div class="container-fluid">
   
        <div class="row px-xl-4">

            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-13">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">THEO DANH MỤC</span></h5>
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
                        $select=$getdata->select_allSPDM($_GET ['id']);
                        foreach($select as $se_pro)
                        {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="img/images/<?php echo $se_pro['hinh_anh'] ?>" alt="">
                                    <div class="product-action">
                                    <a class="btn btn-outline-dark btn-square" href="chitietSP.php?id=<?php echo$se_pro['ma_san_pham'] ?>"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" onclick="likeProduct(<?php echo $se_pro['ma_san_pham']; ?>)"><i class="far fa-heart"></i></a>
                                    <a class="btn btn-outline-dark btn-square" href="chitietSP.php?id=<?php echo$se_pro['ma_san_pham'] ?>"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate" href="chitietSP.php?id=<?php echo$se_pro['ma_san_pham'] ?>"><?php echo $se_pro['ten_san_pham'] ?></a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5><?php echo number_format($se_pro['gia'], 0, ',', '.'); ?>VND</h5><h6 class="text-muted ml-2"><del></del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small><i class="far fa-heart"></i> <span id="like-count-<?php echo $se_pro['ma_san_pham']; ?>"><?php echo $se_pro['so_like'] ?></span></small> 
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small><?php echo $se_pro['do_tuoi_phu_hop'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <?php include('Footer.php') ?>
</body>

</html>