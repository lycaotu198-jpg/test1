<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">QUẢN LÝ SẢN PHẨM </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        DANH SÁCH SẢN PHẨM
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID SP</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Độ tuổi</th>
                                            <th>Số lượng</th>
                                            <th>Hình ảnh</th>
                                            <th>Thể loại</th>
                                            <th>Ngày nhập</th>
                                            <th>Giá tiền</th>
                                            <th>Mô tả</th>
                                            <th>Lượt thích</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                                        $get_data=new DATA();
                                        $select=$get_data->select_allSP();
                                        foreach($select as $se_pro)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_pro['ma_san_pham'] ?></td>
                                            <td><?php echo $se_pro['ten_san_pham'] ?></td>
                                            <td><?php echo $se_pro['do_tuoi_phu_hop'] ?></td>
                                            <td><?php echo $se_pro['so_luong'] ?></td>
                                            <td> <img src="../Guest/img/images/<?php echo $se_pro['hinh_anh']; ?>" width=50 height=50></td>
                                            <td><?php echo $se_pro['ma_danh_muc'] ?></td>
                                            <td><?php echo $se_pro['Ngay_them_moi'] ?></td>
                                            <td><?php echo $se_pro['gia'] ?></td>
                                            <td><?php echo $se_pro['mo_ta'] ?></td>
                                            <td><?php echo $se_pro['so_like'] ?></td>
                                            <td>
                                                <a href="2XoaSP.php?id=<?php echo $se_pro['ma_san_pham'] ?>">Xóa</a>  || 
                                                <a href="2SuaSP.php?idd=<?php echo $se_pro['ma_san_pham'] ?>">Sửa</a>
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
