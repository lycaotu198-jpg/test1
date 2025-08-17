<?php
    include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
    $get_data = new DATA();
    $delete=$get_data->delete_TTSP($_GET['id']);
    if($delete)header('location:2Danhsachsp.php');
    else echo "Không thể xóa tin";
?>