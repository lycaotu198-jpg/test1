<?php
    include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelGuest.php');
    $get_data = new DATA();
    $delete1=$get_data->delete_CTHD($_GET['id']);
    if($delete1)header('location:2DanhsachHoaDon.php');
    else echo "Không thể xóa hóa đơn";
    $delete=$get_data->delete_HD($_GET['id']);
    if($delete)header('location:2DanhsachHoaDon.php');
    else echo "Không thể xóa hóa đơn";
?>