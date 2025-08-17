<?php
// Kiểm tra nếu session chưa được khởi tạo thì mới bắt đầu

    session_start();

?>
<section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Về chúng tôi </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="hoaqua.php">Cửa hàng hoa quả </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="../admin/INDEX.php">Liên hệ</a>
                </li>
                <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item">
                  <a class="nav-link" href="rohoaqua.php">Xem giỏ hàng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="DSHD.php">Xem đơn hàng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Xin chào : <?php echo $_SESSION['username']; ?></a>
                </li>

                <li>
                  <a class="nav-link" href="logout.php">logout</a>
                </li>
                <?php else: ?>
                  <li class="nav-item">
                  <a class="nav-link" href="login.php">login</a>
                  </li>
                <?php endif; ?>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>