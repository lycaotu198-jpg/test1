<?php
    include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
    $get_data = new DATA();
    $delete=$get_data->delete_TTDK($_GET['id']);
    if($delete)header('location:1danhsachkh.php');
    else echo "Không thể xóa tin";
?>