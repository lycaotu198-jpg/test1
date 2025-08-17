<?php
// Kiểm tra nếu session chưa được khởi tạo thì mới bắt đầu
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
?>
<?php include('Head.php') ?>

<?php include('top_head.php') ?>
<?php include('nav.php') ?>

<div id="wrapper">
    <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                                <?php if (isset($_SESSION['username'])): ?>
                                    <h1 class="page-head-line">CHÀO MỪNG ADMIN: <?php echo $_SESSION['username']; ?></h1> 
                                <?php else: ?>
                                    <h1 class="page-head-line">CHÀO MỪNG ĐẾN VỚI NỀN TẢNG QUẢN LÝ CỦA CTY  
                                        <br><a href="login.php">Đăng nhập</a> hoặc <a href="login.php">Đăng ký</a></h1>
                                <?php endif; ?>
                        </div>
                        
                    </div>
                
        </div>
    </div>
</div>
<?php include('footer.php') ?>
