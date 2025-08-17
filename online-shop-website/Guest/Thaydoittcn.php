
<?php include('Head.php') ?>
<body>
    <!-- Topbar Start -->
 <?php include('Topbar.php') ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
<?php include('Navbar.php') ?>
    <!-- Navbar End -->

<div class="container ">
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          <h1>THAY ĐỔI THÔNG TIN CÁ NHÂN</h1>
                        </div>
                       <?php 

                            $select=$getdata->select_ID($_GET ['id']);
                            foreach($select as $se_pro)
                            {
                       ?>
                        <div class="panel-body">
                            <form method="post" action="../Controller/ControllerGuest.php" >
                                        <div class="form-group">
                                            <label>Tên đăng nhập</label>
                                            <input class="form-control" type="text" name="username" value="<?php echo $se_pro['username'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input class="form-control" type="password" name="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập lại mật khẩu</label>
                                            <input class="form-control" type="password" name="REPassword">
                                        </div>
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <input type="file" name="upAV">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="txtEmail" value="<?php echo $se_pro['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Sở thích</label>
                                            <textarea class="form-control" rows="3" name="txtsothich" value="<?php echo $se_pro['hobby'] ?>"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <textarea class="form-control" rows="3" name="txtDiachi" value="<?php echo $se_pro['address'] ?>"></textarea>
                                        </div>
                                        <input type="hidden" name="id_user" value="<?php echo $se_pro['id_user'] ?>">
                                        <button type="submit" name="btnsuaTT" class="btn btn-info">Thay đổi thông tin </button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
                            
            
            </div>
</div>


<?php include('footer.php') ?>
