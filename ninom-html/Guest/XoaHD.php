<?php
    include('C:\xampp\htdocs\ninom-html\Moldel\MoldelGuest.php');
    $get_data = new DATA();
    $delete=$get_data->delete_HD($_GET['id']);
    if($delete)header('location:DSHD.php');
    else echo "Không thể xóa tin";
?>