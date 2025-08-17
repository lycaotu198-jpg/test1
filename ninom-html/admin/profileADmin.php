<?php
// Kiểm tra nếu session chưa được khởi tạo thì mới bắt đầu
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                            <?php if (isset($_SESSION['username'])): ?>
                                <h1 class="page-head-line">CHÀO MỪNG ADMIN: <?php echo $_SESSION['username']; ?></h1> <br>
                            <?php else: ?>
                                <h1 class="page-head-line">CHÀO MỪNG ĐẾN VỚI NỀN TẢNG QUẢN LÝ CỦA CTY</h1>
                                <h1 class="page-subhead-line">Bạn cần đăng nhập để bắt đầu phiên làm việc.  Đăng nhập <a href="login.php">Tại đây</a></h1>
                                <h1 class="page-subhead-line">Nếu bạn chưa có tài khoản ADMIN ? <a href="login.php">Đăng ký</a></h1>  
                            <?php endif; ?>
                        
                    </div>
</div>
<?php include('footer.php') ?>