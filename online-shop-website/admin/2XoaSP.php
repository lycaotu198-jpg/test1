
<?php
include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
$get_data = new DATA();
$delete = $get_data->delete_TTSP($_GET['id']);

if ($delete) {
    echo "<script>alert('Xóa sản phẩm thành công!'); window.location.href='2Danhsachsp.php';</script>";
} else {
    echo "<script>alert('Không thể xóa sản phẩm!'); window.location.href='2Danhsachsp.php';</script>";
}
?>
