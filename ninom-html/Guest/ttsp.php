<!DOCTYPE html>
<html>
<?php
include('Head.php');
?>

<body class="sub_page">
  <div class="hero_area">
    <div class="brand_box">
      <a class="navbar-brand" href="index.php">
        <span>Ninom</span>
      </a>
    </div>
  </div>
  <?php include('nav.php'); ?>

  <section class="product_detail_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <?php
          include('C:\xampp\htdocs\ninom-html\Moldel\MoldelGuest.php');
          $get_data = new DATA();
          $select = $get_data->select_allIDSP($_GET['id']);
          foreach ($select as $product)
          {
          ?>
          <img src="../Guest/images/<?php echo $product['picture']; ?>" class="img-fluid" width="400" height="400">
        </div>
        
        <div class="col-md-6">
          
        <form method="post">
          <h2><?php echo $product['Tensp']; ?></h2>
          <p><?php echo $product['mota']; ?></p>
          <h4>Giá: <?php echo number_format($product['gia'], 0, ',', '.'); ?> VND</h4>
          <label for="quantity">Kho còn:<?php echo $product['soluong']; ?> </label>
            <input type="hidden" name="product_id" value="<?php echo $product['id_SP']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $product['Tensp']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $product['gia']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $product['picture']; ?>"><br>
            <label for="quantity">Số lượng bạn muốn mua:</label>
            <input type="number" name="quantity" value="1" min="1">
            <?php if (isset($_SESSION['username'])): ?><br>
            <button type="submit" name="themmoi" class="btn btn-success">Thêm vào giỏ hàng</button>
            <?php else: ?>
              <br>
              <a href="login.php" class="btn btn-success">Đăng nhập để mua hàng</a>
            <?php endif ?>
          </form>    
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</body>
<?php include('footer.php') ?>
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

            if ($product['soluong'] >= $quantity) 
            {

              $get_data->update_soluong( $quantity,$product_id);
            
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
                        'image' => $product_image
                    ];
                }
                echo "<script>alert('Sản phẩm đã được thêm vào giỏ hàng');  </script>";
            }
            else {
              echo "<script>alert('Số lượng không đủ trong kho. Kho còn lại: " . $product['soluong'] . "'); </script>";
          }
       
    }
}
?>
