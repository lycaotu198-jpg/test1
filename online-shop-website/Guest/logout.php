<?php
session_start(); // Bắt đầu phiên làm việc

// Hủy tất cả các biến phiên
session_unset();

// Hủy phiên làm việc
session_destroy();

// Chuyển hướng về trang đăng nhập hoặc trang chủ
header("Location: index.php");
exit();
?>