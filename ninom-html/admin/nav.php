

        
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />
                            
                            <div class="inner-text">
                            <?php if (isset($_SESSION['username'])): ?>
                                Xin chào, <?php echo $_SESSION['username']; ?><br>
                                <a style="color:white;" href="logout.php">Đăng xuất</a>
                            <?php endif; ?>
                            </div>
                        </div>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Quản lý tài khoản <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="1danhsachkh.php"><i class="fa fa-toggle-on"></i>Danh sách khách hàng</a>
                            </li>
                            <li>
                                <a href="1AddUser.php"><i class="fa fa-bell "></i>Thêm khách hàng</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Quản lý sản phẩm <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="2Danhsachsp.php"><i class="fa fa-coffee"></i>Danh sách sản phẩm</a>
                            </li>
                            <li>
                                <a href="2AddPro.php"><i class="fa fa-flash "></i>Thêm sản phẩm</a>
                            </li>              
                        </ul>
                    </li>
                    <li>
                        <a class="active-menu" href="http://localhost:3000/Guest/index.php"><i class="fa fa-flash "></i>Xem trang chủ khách hàng</a>
                        
                    </li>
                </ul>
            </div>
        </nav>

