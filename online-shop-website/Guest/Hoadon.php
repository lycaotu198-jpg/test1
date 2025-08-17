<!DOCTYPE html>
<html lang="en">

<?php include('Head.php') ?>

<body>
    <!-- Topbar Start -->
 <?php include('Topbar.php') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
<?php include('Navbar.php') ?>
    <!-- Navbar End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12 table-responsive mb-5">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Đơn hàng của bạn</span></h5>
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Mã hóa đơn</th>
                            <th>Người nhận</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ nhận</th>
                            <th>Giá trị đơn hàng</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>phương thức thanh toán</th>
                            <th>hành động</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php 
                            $data = new DATA();
                            if ($id_user = $_SESSION['id_user']) 
                            {$select = $data->xemdonhang($id_user);}
                            else{
                                echo "<script> alert ('Bạn không phải khách hàng');
                                window.location='../Guest/index.php' ;</script>";
                            }
                            
                        ?>
                        <?php if (!empty($select)): ?>
                            <?php foreach($select as $donhang): ?>
                                <tr>
                                    <td class="align-middle">
                                        <a style="color: black;" href="CTGH.php?id=<?php echo $donhang['ma_hoadon']; ?>"><?php echo $donhang['ma_hoadon']; ?></a>
                                    </td>
                                    <td class="align-middle"><?php echo $donhang['HotenKH']; ?></td>
                                    <td class="align-middle"><?php echo $donhang['SDT']; ?></td>
                                    <td class="align-middle"><?php echo $donhang['Diachi']; ?></td>
                                    <td class="align-middle"><?php echo number_format($donhang['gia'], 0, ',', '.'); ?> VND</td>
                                    <td class="align-middle"><?php echo $donhang['ngay_tao']; ?></td>
                                    <td class="align-middle"><?php echo $donhang['trang_thai']; ?></td>
                                    <td class="align-middle"><?php echo $donhang['Phuongthuc']; ?></td>
                                    <td class="align-middle">
                                        <a href="CTGH.php?id=<?php echo $donhang['ma_hoadon']; ?>" class="btn btn-sm btn-info">Chi tiết</a>
                                        <a href="HuyHD.php?id=<?php echo $donhang['ma_hoadon']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Bạn chắc chắn muốn hủy hóa đơn này?');">Hủy hóa đơn</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center text-muted">Bạn chưa có hóa đơn nào.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>

                </table>
            </div>
        
        </div>
    </div>
    <!-- Cart End -->
    

</body>
<?php include('Footer.php') ?>
</html>
