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


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Chi tiết hóa đơn</span></h5>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá tiền</th>
                            <th>Số lượng mua</th>
                            <th>Mô tả đồ chơi</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <body>
                        <?php 
                        $select=$getdata->select_CTHD($_GET['id']);
                            foreach ($select as $cart_item): ?>
                        <tr>
                            <td class="align-middle"><img src="img/images/<?php echo $cart_item['hinh_anh']; ?>" alt="" style="width: 50px;"> <a href="chitietSP.php?id=<?php echo $cart_item['ma_san_pham'] ?>" style="color: black;" ><?php echo $cart_item['ten_san_pham']; ?></a></td>
                            <td class="align-middle"><?php echo number_format($cart_item['gia'], 0, ',', '.'); ?>VND</td>
                            <td class="align-middle"><?php echo $cart_item['soluong']; ?></td>
                            <td class="align-middle"><?php echo $cart_item['mo_ta']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- Cart End -->
    

  <?php include('Footer.php') ?>
  
</body>

</html>
