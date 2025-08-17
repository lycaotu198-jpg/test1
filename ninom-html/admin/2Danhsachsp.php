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
                                            <th>Số lượng</th>
                                            <th>Hình ảnh</th>
                                            <th>Thể loại</th>
                                            <th>Ngày nhập</th>
                                            <th>Giá tiền</th>
                                            <th>Mô tả</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
                                        $get_data=new DATA();
                                        $select=$get_data->select_allSP();
                                        foreach($select as $se_pro)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_pro['id_SP'] ?></td>
                                            <td><?php echo $se_pro['Tensp'] ?></td>
                                            <td><?php echo $se_pro['soluong'] ?></td>
                                            <td> <img src="../Guest/images/<?php echo $se_pro['picture']; ?>" width=50 height=50></td>
                                            <td><?php echo $se_pro['theloai'] ?></td>
                                            <td><?php echo $se_pro['date'] ?></td>
                                            <td><?php echo $se_pro['gia'] ?></td>
                                            <td><?php echo $se_pro['mota'] ?></td>
                                            <td>
                                                <a href="2XoaSP.php?id=<?php echo $se_pro['id_SP'] ?>">Xóa</a>  || 
                                                <a href="2SuaSP.php?idd=<?php echo $se_pro['id_SP'] ?>">Sửa</a>
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
