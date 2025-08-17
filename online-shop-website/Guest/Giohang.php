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
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Giỏ hàng của bạn</span></h5>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá tiền</th>
                            <th>Số lượng mua</th>
                            <th>Mô tả đồ chơi</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <body>
                        <?php 
                        $total_price = 0;
                        if (!empty($_SESSION['cart'])):
                            foreach ($_SESSION['cart'] as $cart_item): ?>
                        <tr>
                            <td class="align-middle"><img src="img/<?php echo $cart_item['image']; ?>" alt="" style="width: 50px;"> <a style="color: black;" href="chitietSP.php?id=<?php echo$cart_item['id'] ?>"><?php echo $cart_item['name']; ?></a></td>
                            <td class="align-middle"><?php echo number_format($cart_item['price'], 0, ',', '.'); ?>VND</td>
                            <td class="align-middle"><?php echo $cart_item['quantity']; ?></td>
                            <td class="align-middle"><?php echo $cart_item['mota']; ?></td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><a href="Giohang.php?remove=<?php echo $cart_item['id']; ?>" class="btn btn-danger">Xóa </a></button> </td>
                        </tr>
                        <?php $total_price += $cart_item['price'] * $cart_item['quantity']; ?>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <td class="align-middle"> Giỏ hàng trống</td>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Mã giảm giá">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Mã giảm giá</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin giỏ hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Tổng hóa đơn</h6>
                            <h6><?php echo number_format($total_price, 0, ',', '.'); ?>VND</h6>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Miễn ship</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Tổng tiền</h5>
                            <h5><?php echo number_format($total_price, 0, ',', '.'); ?>VND</h5>
                        </div>
                     <?php if (isset($_SESSION['username'])): ?>
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" data-bs-toggle="modal" data-bs-target="#checkoutModal">Xác nhận thanh toán</button>
                        <?php else: ?>
                            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" onclick="alert('Bạn cần đăng nhập để thanh toán'); return false;" >Đăng nhập để thanh toán</button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
    

  <?php include('Footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- Modal Thanh Toán -->
   <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkoutModalLabel">Thanh toán</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="../Controller/ControllerGuest.php">
            <div class="mb-3">
              <label name="hoten" class="form-label">Họ tên người nhận:</label>
              <input type="text" class="form-control" name="fullname" required>
              <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
            </div>
            <div class="mb-3">
              <label name="sdt" class="form-label">Số điện thoại</label>
              <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Địa chỉ giao hàng</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Phương thức thanh toán</label>
              <select class="form-control" name="payment_method">
                <option value="Thanh toán khi nhận hàng (COD)">Thanh toán khi nhận hàng (COD)</option>
                <option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng</option>
              </select>
            </div>
            giá đơn hàng:
            
            <h5><?php echo number_format($total_price, 0, ',', '.'); ?>VND</h5>
            <input type="hidden" name="total_price1" value="<?php echo $total_price; ?>">
            <button type="submit" name="Muahang" class="btn btn-primary">Xác nhận mua hàng</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    include('../Model/ModelGuest.php');
    $get_data = new DATA();

    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $cart_item) {
            if ($cart_item['id'] == $product_id) {

                if ($cart_item['quantity'] > 1) {
                    $_SESSION['cart'][$key]['quantity'] -= 1; 
                    $get_data->update_soluongcong(1, $product_id); // Giảm số lượng kho đi 1
                } else {
                    // Nếu số lượng còn lại trong giỏ hàng là 1, xóa sản phẩm khỏi giỏ
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    $get_data->update_soluongcong(1, $product_id); // Giảm số lượng kho đi 1
                }
                break;
            }
        }
    }

    echo "<script> window.location='../Guest/Giohang.php';</script>";
}
    
?>