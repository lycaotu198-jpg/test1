
<?php 
                            
            if (isset($_POST ['btndangky']) )
                 {
                     if (empty($_POST['username'])||empty($_POST['Password']))
                           {
                             echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
                               }
                      elseif($_POST['Password']!==$_POST['REPassword'])
                          {
                             echo "<script>alert('Mật khẩu nhập lại không khớp!');</script>";
                           }
                       else
                          {
                            include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelGuest.php');
                                $data=new DATA();
                                                
                                $selecttk=$data->select_KTuser($_POST["username"]);
                                                
                            if($selecttk==0)
                            {
                            $adduser=$data->insert_TK($_POST['username'],$_POST['Password'],$_POST['txtDiachi'],$_POST['upAV'],$_POST['option'],$_POST['txtsothich'],$_POST['txtEmail']);
                                                            
                            if ($adduser) 
                             {
                                echo "<script>alert('Đăng ký thành công');
                                 window.location='../Guest/login.php' 
                                 </script>";
                                } 
                             else 
                                {
                                   echo "<script>alert('Đăng ký thất bại');</script>";
                                }
                             } 
                             else
                              {
                             echo "<script>alert('User đã có người dùng hãy chọn User khác')
                             window.location='../Guest/Dangky.php' 
                             </script>";
                             }
                                                   
                        }            
           }
?>
<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelGuest.php');
    $data=new DATA();
    if (isset($_POST["txtsub_dn"]))
    {
        if(empty($_POST["txttendn"])||empty($_POST["txtmk"]))
            echo "<script>alert('Bạn chưa nhập tài khoản hoặc mật khẩu')</script>";
        else
        {
         
            $dangky=$data->select_where_KH($_POST['txttendn'],$_POST['txtmk']);
            if($dangky&& $dangky->num_rows > 0)
            {
                $user_data = $dangky->fetch_assoc(); // Lấy dữ liệu dưới dạng mảng liên kết
                
                // Lưu username và id_user vào session
                $_SESSION['username'] = $_POST['txttendn'];
                $_SESSION['id_user'] = $user_data['id_user'];
                echo "<script>alert('Đăng nhập thành công');
                window.location ='../Guest/index.php';
                </script>";
            }
            else
            {
                echo "<script>alert('Đăng nhập thất bại');
                window.location ='../Guest/login.php';
                </script>";
            }
        }
    }
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include thư viện PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if (isset($_POST["btllmk1"])) {
    if (empty($_POST["username"]) || empty($_POST["email"])) {
        echo "<script>alert('Bạn chưa nhập đầy đủ thông tin!');</script>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];

        // Kiểm tra email có tồn tại trong database hay không
        $dangky = $data->llmk($username, $email);

        if ($dangky) {
            $num = mysqli_num_rows($dangky);

            if ($num > 0) {
                $row = mysqli_fetch_assoc($dangky);
                $password = $row['password']; // Lấy mật khẩu từ database

                // Gửi email thông báo mật khẩu
                $mail = new PHPMailer(true);

                try {
                    // Cấu hình SMTP
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'lytu683@gmail.com'; // Email gửi đi
                    $mail->Password   = 'zfovtnoqgakmyylg'; // Mật khẩu ứng dụng
                    $mail->SMTPSecure = 'tls';
                    $mail->Port       = 587;
                    $mail->CharSet    = "UTF-8";
                    $mail->Encoding   = "base64";

                    // Cấu hình người gửi và người nhận
                    $mail->setFrom('lytu683@gmail.com', 'Đội ngũ hỗ trợ');
                    $mail->addAddress($email); // Địa chỉ email người nhận

                    // Nội dung email
                    $mail->isHTML(true);
                    $mail->Subject = "Khôi phục mật khẩu của bạn";
                    $mail->Body    = "<p>Xin chào,</p>
                                      <p>Mật khẩu của bạn là: <strong>$password</strong></p>
                                      <p>Vui lòng đăng nhập và đổi mật khẩu ngay.</p>
                                      <p>Trân trọng, Cao Tú</p>";

                    $mail->send();
                    echo "<script>
                            alert('Mật khẩu đã được gửi vào email của bạn. Vui lòng kiểm tra hộp thư!');
                            window.location.href = 'http://localhost/online-shop-website-template/Guest/login.php';
                          </script>";
                } catch (Exception $e) {
                    echo "Gửi email thất bại. Lỗi: " . $mail->ErrorInfo;
                }
            } else {
                echo "<script>
                        alert('Tên đăng nhập hoặc email không tồn tại trong hệ thống!');
                        window.location.href = 'http://localhost/online-shop-website-template/Guest/llMK1.php';
                      </script>";
            }
        } else {
            echo "Lỗi truy vấn: " . mysqli_error($data->$conn);
        }
    }
}
?>


<?php


// Include thư viện PHPMailer

if (isset($_POST["dk"])) {
    if (empty($_POST["email"])) {
        echo "<script>alert('Bạn chưa nhập Email !');
        window.location.href = 'http://localhost/online-shop-website-template/Guest/index.php';</script>";
    } else {

        $email = $_POST['email'];

                // Gửi email thông báo mật khẩu
                $mail1 = new PHPMailer(true);

                try {
                    // Cấu hình SMTP
                    $mail1->isSMTP();
                    $mail1->Host       = 'smtp.gmail.com';
                    $mail1->SMTPAuth   = true;
                    $mail1->Username   = 'lytu683@gmail.com'; // Email gửi đi
                    $mail1->Password   = 'zfovtnoqgakmyylg'; // Mật khẩu ứng dụng
                    $mail1->SMTPSecure = 'tls';
                    $mail1->Port       = 587;
                    $mail1->CharSet    = "UTF-8";
                    $mail1->Encoding   = "base64";

                    // Cấu hình người gửi và người nhận
                    $mail1->setFrom('lytu683@gmail.com', 'CAOLYTOY Company');
                    $mail1->addAddress($email); // Địa chỉ email người nhận

                    // Nội dung email
                    $mail1->isHTML(true);
                    $mail1->Subject = "LỜI MỜI TỪ CHÚNG TÔI";
                    $mail1->Body    = "<p>CAOLY toys Xin chào,</p>
                                    <p>HÃY ĐĂNG NHẬP NGAY ĐỂ ĐƯỢC HƯỞNG ƯU ĐÃI</strong></p>
                                    <p>Combo lego City giá chỉ còn 200k</p>
                                    <p>Combo đồ chơi trí tuệ giá chỉ còn 100k sale tới 80%</p>
                                    <p>Trân trọng, CAOLY toys</p>";

                    $mail1->send();
                    echo "<script>
                            alert('Tin nhắn đã được gửi vào email của bạn. Vui lòng kiểm tra hộp thư!');
                            window.location.href = 'http://localhost/online-shop-website-template/Guest/index.php';
                          </script>";
                } catch (Exception $e) {
                    echo "Gửi email thất bại. Lỗi: " . $mail1->ErrorInfo;
                }
            } 
        } 

?>
<?php


if (isset($_POST['Muahang'])) {
    $get_data = new DATA();

    if (isset($_POST['total_price1'])) {
        $giagiohang = $_POST['total_price1'];

        if ($giagiohang <= 0) {
            echo "<script>alert('Lỗi: Tổng giá trị đơn hàng không hợp lệ!');
            window.location.href = '../Guest/Giohang.php';</script>";
            exit();
        }

        // Lấy dữ liệu từ form
        $id_user = $_POST['id_user'];
        $hotenkh = $_POST['fullname'];
        $Sdt = $_POST['phone'];
        $diachi = $_POST['address'];
        $phuongthuc = $_POST['payment_method'];

        // Gọi hàm thêm đơn hàng
        $themgiohang = $get_data->insert_gh($id_user, $hotenkh, $Sdt, $diachi, $phuongthuc, $giagiohang);

        if ($themgiohang) {
            // Lấy ID đơn hàng mới nhất
            $last_order_id = $get_data->get_last_order_id();

            // Thêm từng sản phẩm vào bảng chi tiết đơn hàng
            foreach ($_SESSION['cart'] as $item) {
                $id_sp = $item['id'];
                $ten_sp = $item['name'];
                $so_luong = $item['quantity'];
                $gia = $item['price'];

                $get_data->insert_chi_tiet_dh($last_order_id, $id_sp, $so_luong, $gia);
            }

            // Xóa giỏ hàng sau khi đặt thành công
            $_SESSION['cart'] = [];

            echo "<script>
                alert('Đặt hàng thành công! Đơn hàng đã được thêm mới.');
                window.location.href = '../Guest/Hoadon.php';
            </script>";
        } else {
            echo "<script>alert('Lỗi: Không thể thêm đơn hàng!');</script>";
        }
    } else {
        echo "<script>alert('Lỗi: Thiếu thông tin tổng giá đơn hàng!');</script>";
    }
}
?>

<?php

if (isset($_POST['Muahang1'])) {
    $get_data = new DATA();

    if (isset($_POST['total_price1'])) {
        $giagiohang = $_POST['total_price1']; 
        
        if ($giagiohang <= 0) {
            echo "<script>alert('Lỗi: Tổng giá trị đơn hàng không hợp lệ!');
            window.location.href = '../Guest/rohoaqua.php';</script>";
            exit(); // Dừng xử lý tiếp
        }

        // Nhận dữ liệu từ form
        $id_user = $_POST['id_user'];
        $hotenkh = $_POST['fullname'];
        $Sdt = $_POST['phone'];
        $diachi = $_POST['address'];
        $phuongthuc = $_POST['payment_method'];
        
        // Gọi hàm để thêm đơn hàng vào cơ sở dữ liệu
        $themgiohang = $get_data->insert_gh($id_user,$hotenkh, $Sdt, $diachi, $phuongthuc, $giagiohang);

        if ($themgiohang) {
            // Xóa giỏ hàng sau khi thêm đơn hàng thành công
            $_SESSION['cart'] = [];

            echo "<script>
                alert('Đặt hàng thành công! Đơn hàng đã được thêm mới.');
                window.location.href = '../Guest/Hoadon.php';
            </script>";
        } else {
            echo "<script>alert('Lỗi: Giỏ hàng chưa được thêm mới!');</script>";
        }
    } else {
        echo "<script>alert('Lỗi: Thiếu thông tin giá!');</script>";
    }
}
?>
<?php
    if(isset($_POST ['btnsuaTT']))
    {
        $get_data=new DATA;
        if( empty($_POST['username']) || empty($_POST['REPassword']) )
        {
            echo "<script>alert('Bạn chưa điền đầy đủ thông tin');
             window.location.href = '../Guest/TTCN.php'</script>";
        }
        else{
            $update=$get_data->update_tt($_POST['username'],$_POST['REPassword'],$_POST['txtDiachi'],$_POST['upAV'],$_POST['txtsothich'],$_POST['txtEmail'],$_POST['id_user']);
            if($update)
            {
    
                echo "<script>alert('Sửa thông tin thành công');
                 window.location.href = '../Guest/TTCN.php';
                </script>";
            } 
            else echo"Cập thật không thành công";
        }
      
    }
 ?>