<!DOCTYPE html>
<html>
<head>
  <?php include('Head.php'); ?>
  <!-- Thêm CSS cho Modal -->
  <style>
    /* Cửa sổ Modal */
    .modal {
      display: none; 
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 100px; /* Điều chỉnh vị trí từ trên */
    }

    /* Modal Nội dung */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 250px; /* Giảm chiều rộng cửa sổ modal */
      max-width: 50%; /* Giới hạn không quá 90% chiều rộng màn hình */
      box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Thêm hiệu ứng bóng */
    }

    /* Nút Đóng Modal */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    /* Nút thanh toán trong Modal */
    .btn {
      width: 100%; /* Đảm bảo nút thanh toán chiếm hết chiều rộng */
      padding: 10px;
    }
  </style>
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
        <tbody>
          <?php 
          $total_price = 0;
          if (!empty($_SESSION['cart'])):
              foreach ($_SESSION['cart'] as $cart_item): ?>
                <tr>
                  <td><img src="images/<?php echo $cart_item['image']; ?>" width="50"></td>
                  <td><?php echo $cart_item['name']; ?></td>
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
        </tbody>
      </table>
      <div class="total_price">
        <h4>Tổng tiền: <?php echo number_format($total_price, 0, ',', '.'); ?> VND</h4>
      </div>

      <!-- Nút thanh toán sẽ mở modal -->
      <button id="openModalBtn" class="btn btn-success">Thanh toán</button>
    </div>
  </section>

  <!-- Modal (cửa sổ popup) -->
  <div id="checkoutModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h4>Thông tin khách hàng:</h4>
      <form action="process_checkout.php" method="POST">
        <div class="form-group">
          <label for="name">Họ và tên:</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="address">Địa chỉ giao hàng:</label>
          <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="phone">Số điện thoại:</label>
          <input type="text" name="phone" class="form-control" required>
        </div>

        <!-- Phương thức thanh toán -->
        <div class="form-group">
          <label for="payment_method">Phương thức thanh toán:</label>
          <select name="payment_method" class="form-control" required>
            <option value="cod">Thanh toán khi nhận hàng (COD)</option>
            <option value="credit_card">Thanh toán qua thẻ tín dụng</option>
            <option value="paypal">Thanh toán qua PayPal</option>
          </select>
        </div>

        <!-- Nút thanh toán -->
        <button type="submit" class="btn btn-success">Xác nhận thanh toán</button>
      </form>
    </div>
  </div>

  <?php include('footer.php'); ?>

  <!-- JavaScript để mở và đóng cửa sổ modal -->
  <script>
    // Mở cửa sổ Modal khi nhấn nút thanh toán
    var modal = document.getElementById("checkoutModal");
    var btn = document.getElementById("openModalBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    // Đóng cửa sổ Modal khi nhấn dấu X
    span.onclick = function() {
      modal.style.display = "none";
    }

    // Đóng cửa sổ Modal nếu nhấn bên ngoài cửa sổ
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>
