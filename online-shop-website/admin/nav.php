<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/client-img.png" class="img-thumbnail" />
                    <div class="inner-text">
                        <?php if (isset($_SESSION['username'])): ?>
                            Xin chào, <?php echo $_SESSION['username']; ?><br>
                            <a style="color:white;" href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </li>

            <!-- Quản lý tài khoản -->
            <li>
                <a href="#"><i class="fa fa-users"></i> Quản lý tài khoản <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="1danhsachkh.php"><i class="fa fa-address-book"></i> Danh sách khách hàng</a>
                    </li>
                    <li>
                        <a href="1AddUser.php"><i class="fa fa-user-plus"></i> Thêm khách hàng</a>
                    </li>
                </ul>
            </li>

            <!-- Quản lý sản phẩm -->
            <li>
                <a href="#"><i class="fa fa-box-open"></i> Quản lý sản phẩm <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="2Danhsachdm.php"><i class="fa fa-list-alt"></i> Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="2Danhsachsp.php"><i class="fa fa-cubes"></i> Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="2AddCA.php"><i class="fa fa-plus-square"></i> Thêm danh mục</a>
                    </li>
                    <li>
                        <a href="2AddPro.php"><i class="fa fa-plus-circle"></i> Thêm sản phẩm mới</a>
                    </li>
                </ul>
            </li>

            <!-- Quản lý hóa đơn -->
            <li>
                <a href="#"><i class="fa fa-file-invoice-dollar"></i> Quản lý hóa đơn <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="2DanhsachHoaDon.php"><i class="fa fa-file-alt"></i> Danh sách hóa đơn</a>
                    </li>
                    <li>
                        <a href="Thongke.php"><i class="fa fa-chart-bar"></i> Thống kê hóa đơn</a>
                    </li>
                </ul>
            </li>

            <!-- Giao diện khách hàng -->
            <li>
                <a href="/online-shop-website-template/Guest/index.php"><i class="fa fa-globe"></i> Tới giao diện khách hàng</a>
            </li>

            <?php endif; ?>
        </ul>
    </div>
</nav>
