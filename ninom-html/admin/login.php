<?php 
    session_start();
    include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
    $data=new DATA();
    if (isset($_POST["txtsub_dn"]))
    {
        if(empty($_POST["txttendn"])||empty($_POST["txtmk"]))
            echo "<script>alert('Bạn chưa nhập tài khoản hoặc mật khẩu')</script>";
        else
        {
         
            $dangky=$data->select_where($_POST['txttendn'],$_POST['txtmk']);
            if($dangky)
            {
                $_SESSION['username'] = $_POST['txttendn'];
                echo "<script>alert('Đăng nhập thành công')
                window.location='INDEX.php' 
                </script>";
            }
            else
            {
                echo "<script>alert('Đăng nhập thất bại')
                window.location='login.php' 
                </script>";;
            }
        }
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập ADmin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body style="background-color:rgb(64, 233, 114);">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form"  method="POST" action="login.php">
                                    <hr />
                                    <h5>Nhập vào thông tin người quản lý để đăng nhập</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Tài khoản " name="txttendn"/>
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Mật khẩu " name="txtmk" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="INDEX.php" >Bạn quên mật khẩu ? </a> 
                                            </span>
                                        </div>
                                        <input type="submit" name="txtsub_dn" value="Đăng nhập">
                                    <hr />
                                    bạn chưa đăng ký ? <a href="INDEX.php" >click vào đây</a> hoặc trở về<a href="INDEX.php">Trang chủ</a> 
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
