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
   

    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">lấy lại mật khẩu</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form method="post" action="../Controller/ControllerGuest.php" >
                        <div class="control-group">
                            <input type="text" class="form-control" name="username" placeholder="Tài khoản của bạn"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" placeholder="Email của bạn"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                      
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" name="btllmk1">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Contact End -->


    <?php include('Footer.php') ?>
</body>

</html>