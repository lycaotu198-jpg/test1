<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">QUẢN LÝ HÓA ĐƠN</h1>
                    </div>
                </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        DANH SÁCH HÓA ĐƠN
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Mã hóa đơn</th>
                                            <th>Mã người dùng</th>
                                            <th>HotenKH</th>
                                            <th>SDT</th>
                                            <th>Địa chỉ</th>
                                            <th>Phương thức</th>
                                            <th>Giá tiền (VND)</th>
                                            <th>Ngày tạo</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                                        $get_data=new DATA();
                                        $select=$get_data->xemAlldonhang();
                                        foreach($select as $se_pro)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_pro['ma_hoadon'] ?></td>
                                            <td><?php echo $se_pro['ma_nguoi_dung'] ?></td>
                                            <td><?php echo $se_pro['HotenKH'] ?></td>
                                            <td><?php echo $se_pro['SDT'] ?></td>
                                            <td><?php echo $se_pro['Diachi'] ?></td>
                                            <td><?php echo $se_pro['Phuongthuc'] ?></td>
                                            <td><?php echo number_format($se_pro['gia'], 0, ',', '.'); ?></td>
                                            <td><?php echo $se_pro['ngay_tao'] ?></td>
                                            <td><?php echo $se_pro['trang_thai'] ?></td>
                                            <td>
                                                <a href="2XoaHD.php?id=<?php echo $se_pro['ma_hoadon'] ?>">Xóa</a>  || 
                                                <a href="2SuaHD.php?idd=<?php echo $se_pro['ma_hoadon'] ?>">Sửa</a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
            </div>
        </div>
    <?php include('footer.php') ?>
