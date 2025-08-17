<?php
    include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelGuest.php');
    $get_data = new DATA();
    $Huy=$get_data->Huy_hoadon($_GET['id']);
    if($Huy)header('location:Hoadon.php');
?>