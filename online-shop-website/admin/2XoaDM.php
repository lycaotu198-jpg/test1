<?php
    include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
    $get_data = new DATA();
    $delete=$get_data->delete_DM($_GET['id']);
    if($delete)header('location:2Danhsachdm.php');
    else echo "Không thể xóa tin";
?>