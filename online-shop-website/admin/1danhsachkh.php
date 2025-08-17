<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">QUẢN LÝ TÀI KHOẢN ĐĂNG NHẬP </h1>
                        <h1 class="page-subhead-line">ADmin quản lý thông tin đăng nhập của khách hàng sử dụng dịch vụ tại đây </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        THÔNG TIN ĐĂNG NHẬP CỦA KHÁCH HÀNG
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Giới tính</th>
                                            <th>Avatar</th>
                                            <th>Sở thích</th>
                                            <th>email</th>
                                            <th>Địa chỉ</th>
                                            <th>Quyền hạn</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
                                        $get_data=new DATA();
                                        $select=$get_data->select_all();
                                        foreach($select as $se_pro)
                                        {
                                    ?>
                                        <tr>
                                            <td><?php echo $se_pro['id_user'] ?></td>
                                            <td><?php echo $se_pro['username'] ?></td>
                                            <td><?php echo $se_pro['password'] ?></td>
                                            <td><?php echo $se_pro['genger'] ?></td>
                                            <td> <img src="../Guest/img/<?php echo $se_pro['avatar']?>" width="50" height="50"></td>
                                            <td><?php echo $se_pro['hobby'] ?></td>
                                            <td><?php echo $se_pro['email'] ?></td>
                                            <td><?php echo $se_pro['address'] ?></td>
                                            <td><?php echo $se_pro['Quyen'] ?></td>
                                            <td>
                                                <a href="1Xoakhachhang.php?id=<?php echo $se_pro['id_user'] ?>">Xóa</a>  || 
                                                <a href="1SuaKH.php?idd=<?php echo $se_pro['id_user'] ?>">Sửa</a>
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
