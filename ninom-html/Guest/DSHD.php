<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('Head.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    /* Thêm một số cải tiến CSS */
    .hero_area {
      background-color: #f8f9fa;
      padding: 20px 0;
      text-align: center;
    }

    .brand_box {
      font-size: 32px;
      font-weight: bold;
      color: #343a40;
    }

    .order_details_section {
      background-color: #ffffff;
      padding: 40px 0;
    }

    .order_details_section .container {
      max-width: 900px;
    }

    .heading_container h2 {
      font-size: 28px;
      font-weight: 600;
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    .order_info p {
      font-size: 16px;
      line-height: 1.8;
      color: #555;
    }

    .order_info p strong {
      font-weight: 600;
    }

    .order_info {
      margin-bottom: 30px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    .table {
      margin-top: 30px;
      width: 100%;
      text-align: center;
    }

    .table th,
    .table td {
      padding: 12px;
      text-align: center;
    }

    .table th {
      background-color: #007bff;
      color: white;
    }

    .total_price {
      margin-top: 30px;
      font-size: 20px;
      font-weight: 600;
      color: #333;
      text-align: center;
    }

    .alert {
      background-color: #f8d7da;
      color: #721c24;
      padding: 10px;
      border-radius: 5px;
      text-align: center;
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

  <section class="order_details_section layout_padding">
    <div class="container">
      <?php
      include('C:\xampp\htdocs\ninom-html\Moldel\MoldelGuest.php');
      $data = new DATA();
      $id_user = $_SESSION['id_user'];
      $select = $data->xemdonhang($id_user);
      foreach($select as $order)
      {
      ?>
          <div class="heading_container">
            <h2>Chi tiết đơn hàng #<?php echo $order['Id_hoadon']; ?></h2>
          </div>

          <!-- Thông tin khách hàng và thanh toán -->
          <div class="order_info">
            <p><strong>Họ tên:</strong> <?php echo $order['HotenKH']; ?></p>
            <p><strong>Số điện thoại:</strong> <?php echo $order['SDT']; ?></p>
            <p><strong>Địa chỉ:</strong> <?php echo $order['Diachi']; ?></p>
            <p><strong>Trị giá đơn hàng:</strong> <?php echo number_format($order['gia'], 0, ',', '.'); ?> VND</p>
            <p><strong>Phương thức thanh toán:</strong> <?php echo $order['Phuongthuc']; ?></p>
            <a href="XoaHD.php?id=<?php echo $order['Id_hoadon'] ?>">Xóa</a>
          </div>

          <!-- Lấy các sản phẩm trong đơn hàng (nếu cần thêm phần này) -->
          <?php
          // Lấy các sản phẩm trong đơn hàng, ví dụ: $order_id từ Id_hoadon
          // Bạn có thể thêm logic hiển thị sản phẩm tại đây nếu có bảng chi tiết đơn hàng.
          ?>
      <?php
      }
      ?>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
