


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
                          
                        </div>
                       <?php
                       $user=$_SESSION['username'];
                       $select=$getdata->select_TTCN($user);
                       foreach ($select as $se_user)
                       {

                       ?>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Thông tin cá nhân</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex mb-3">
                            <h6 style="text-align: center; ">Tên đăng nhập:</h6>
                            <p><?php echo $se_user['username'] ?></p>
                        </div>
                        <div class="d-flex  mb-3 ">
                            <h6 style="text-align: center; ">Mật khẩu:</h6>
                            <?php echo $se_user['password'] ?>
                        </div>
                        <div class="d-flex ">
                            <h6 style="text-align: center; ">Ảnh đại diện:</h6>
                            <img src="img/<?php echo $se_user['avatar'] ?>" alt="" width="50" height="50">
                        </div>
                        <div class="d-flex mb-3 ">
                            <h6 style="text-align: center; ">Email:</h6>
                            <?php echo $se_user['email'] ?>
                        </div>
                        <div class="d-flex mb-3  ">
                            <h6 style="text-align: center; ">Sở thích:</h6>
                            <?php echo $se_user['hobby'] ?>
                        </div>
                        <div  class="d-flex mb-3  ">
                            <h6 style="text-align: center; ">Địa chỉ:</h6>
                            <?php echo $se_user['address'] ?>
                        </div>
                    </div>
                    <div class="pt-1">
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3" ><a style="color: black;" href="Thaydoittcn.php?id=<?php echo $se_user['id_user'] ?>">Thay đổi thông tin cá nhân</a></button>
                    </div>
                </div>
                        
            <?php } ?>
        </div>
</div>
</div>
<?php include('Footer.php') ?>


