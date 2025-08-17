
<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">QUẢN LÝ DANH MỤC SẢN PHẨM </h1>
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
                                            <th>ID Danh mục</th>
                                            <th>Tên danh mục</th>
                                            <th>Mô tả</th>
                                            <th>Logo </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                                        $get_data=new DATA();
                                        $select=$get_data->select_allDM();
                                        foreach($select as $se_pro)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_pro['ma_danh_muc'] ?></td>
                                            <td><?php echo $se_pro['ten_danh_muc'] ?></td>
                                            <td><?php echo $se_pro['mo_ta'] ?></td>
                                            <td><img src="../Guest/img/<?php echo $se_pro['Anh_DM']; ?>" width=50 height=50></td>
                                            <td>
                                                <a href="2XoaDM.php?id=<?php echo $se_pro['ma_danh_muc'] ?>">Xóa</a>  || 
                                                <a href="2SuaDM.php?idd=<?php echo $se_pro['ma_danh_muc'] ?>">Sửa</a>
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
