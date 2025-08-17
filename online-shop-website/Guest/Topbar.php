
<?php
// Kiểm tra nếu session chưa được khởi tạo thì mới bắt đầu

    session_start();

?>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
             
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                    <?php if (isset($_SESSION['username'])): ?>
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']; ?></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a class="dropdown-item" href="TTCN.php">Thông tin cá nhân</a></button>
                            <button class="dropdown-item" type="button"><a class="dropdown-item" href="logout.php">Đăng xuất</a></button>
                        </div>
                    <?php else: ?>
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Tài khoản</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a class="dropdown-item" href="login.php">Đăng nhập</a></button>
                            <button class="dropdown-item" type="button"><a class="dropdown-item" href="Dangky.php">Đăng ký</a></button>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">USD</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a href="/online-shop-website-template/admin/INDEX.php">EUR</a></button>
                            <button class="dropdown-item" type="button">VND</button>
                            <button class="dropdown-item" type="button">RMB</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">VN</button>
                            <button class="dropdown-item" type="button">CN</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="index.php" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">CAOLY</span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Toys</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="Trangtimkiem.php" method="get">
                    <div class="input-group">
                        <input type="text" name="key" class="form-control" placeholder="Nhập từ khóa">
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+012 345 6789</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


   