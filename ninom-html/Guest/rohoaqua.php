<!DOCTYPE html>
<html>
<head>
  <?php include('Head.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="sub_page">
  <div class="hero_area">
    <div class="brand_box">
      <a class="navbar-brand" href="index.php">
        <span>Ninom</span>
      </a>
    </div>
  </div>
  <?php include('nav.php'); ?>
  <section class="cart_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Giỏ hàng của bạn</h2>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <body>
          <?php 
          $total_price = 0;
          if (!empty($_SESSION['cart'])):
              foreach ($_SESSION['cart'] as $cart_item): ?>
                <tr>
                  <td><img src="images/<?php echo $cart_item['image']; ?>" width="50"></td>

                  <td><?php echo $cart_item['name']; ?></td><input type="hidden" value="">

                  <td><?php echo number_format($cart_item['price'], 0, ',', '.'); ?> VND</td>

                  <td><?php echo $cart_item['quantity']; ?></td>


                  <td><?php echo number_format($cart_item['price'] * $cart_item['quantity'], 0, ',', '.'); ?> VND</td>

                  <td><a href="rohoaqua.php?remove=<?php echo $cart_item['id']; ?>" class="btn btn-danger">Xóa</a></td>

                </tr>
                <?php $total_price += $cart_item['price'] * $cart_item['quantity']; ?>
                
          <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="6" class="text-center">Giỏ hàng trống!</td>
            </tr>
          <?php endif; ?>
        </body>
      </table>
      <div class="total_price">
        <h4>Tổng tiền: <?php echo $total_price; ?> VND</h4>
      </div>
      <!-- Nút mở modal thanh toán -->
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#checkoutModal">
        Xác nhận mua hàng
      </button>
      <a href="hoaqua.php" class="btn btn-success">Tiếp tục mua sắm</a>
    </div>
  </section>


  <?php include('hoaquatop3moi.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

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
            <h5><?php echo $total_price; ?></h5>
            <input type="hidden" name="total_price1" value="<?php echo $total_price; ?>">
            <button type="submit" name="Muahang" class="btn btn-primary">Xác nhận mua hàng</button>
            
          </form>
        </div>
      </div>
    </div>
  </div>
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

    echo "<script> window.location='../Guest/rohoaqua.php';</script>";
}
    
?>




