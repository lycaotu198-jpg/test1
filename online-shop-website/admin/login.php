<?php 
    session_start();
    include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
    $data=new DATA();
    if (isset($_POST["txtsub_dn"]))
    {
        if(empty($_POST["txttendn"])||empty($_POST["txtmk"]))
            echo "<script>alert('Bạn chưa nhập tài khoản hoặc mật khẩu')</script>";
        else
        {
         
            $dangky=$data->select_where_Admin($_POST['txttendn'],$_POST['txtmk']);
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
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 30px;
            background: #fff;
            background-color: aliceblue;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            
        }
        .login-container h4 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .login-container .input-group-text {
            background-color:rgb(13, 112, 3);
            color: white;
            
        }
        .btn-custom {
            background-color:rgb(13, 112, 3);
            color: white;
        }
        .btn-custom:hover {
            background-color: #3a5544;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h4><i class="fa-solid fa-user-tie"></i> Đăng nhập quản trị viên</h4>
        <form method="post" action="login.php">
            <div class="mb-3">
                <label class="form-label">Tài khoản</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="txttendn" placeholder="Nhập tài khoản" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="txtmk" placeholder="Nhập mật khẩu" required>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <input type="checkbox" id="rememberMe">
                    <label for="rememberMe">Nhớ tài khoản</label>
                </div>
                <a href="llMK1.php" class="text-decoration-none">Quên mật khẩu?</a>
            </div>
            <button type="submit" name="txtsub_dn" class="btn btn-custom w-100 mt-3">Đăng nhập</button>
            <div class="text-center mt-3">
                Bạn chưa có tài khoản? <a href="txtsub_dn" class="text-decoration-none">Đăng ký</a> hoặc <a href="INDEX.php" class="text-decoration-none">Trang chủ</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
