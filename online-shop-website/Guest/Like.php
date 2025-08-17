<?php
include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelGuest.php');
$get_data = new DATA();
$like = $get_data->like($_GET['id']);
echo $like ? 'success' : 'fail';
?>
