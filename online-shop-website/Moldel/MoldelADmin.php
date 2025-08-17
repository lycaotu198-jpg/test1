<?php
    include("Connect.php");
    class DATA
    {
        public function select_KTuser($user)
        {
            global $conn;
            $sql = "Select * from dangkytt where username='$user'";
            $run = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($run);
            return $num;
        }
        public function insert_TK($username,$password,$Address,$Av,$gender,$hobby,$email)
        {
            global $conn;
            $sql = "INSERT INTO dangkytt (id_user, username, password, type, address, avatar, genger, hobby, email)
                VALUES ('NULL','$username', '$password','Null', '$Address', '$Av','$gender', '$hobby', '$email')";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }   
       
        public function select_where_Admin($username,$password)
        {
            global $conn;
            $sql= "SELECT * from dangkytt where username='$username' and password='$password' and Quyen='Admin'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }
       
        public function select_profile($username)
        {
            global $conn;
            $sql="select * from dangkytt where username='$username'";
            $run=mysqli_query($conn, $sql) ;
            return $run;
        }
        public function select_ID($ID)
        {
            global $conn;
            $sql="select * from dangkytt where id_user='$ID'";
            $run=mysqli_query($conn, $sql) ;
            return $run;
        }
        public function select_all()
        {
        global $conn;
        $sql="select * from dangkytt";
        $run=mysqli_query($conn,$sql);
        return $run;
         }
         function update_tt($username, $password,$Address,$av,$genger,$hobby,$email,$Quyen,$ID_user)
         {
             global $conn;
             $sql="update dangkytt set username='$username', password='$password',address ='$Address',avatar='$av',genger='$genger',hobby='$hobby',email= '$email', Quyen= '$Quyen' where id_user= $ID_user";
             $run=mysqli_query($conn, $sql); 
             return $run;
         }
         function add_new($tieude,$noidungngan,$noidungdu,$tacgia,$ngay,$anh)
        {
            global$conn;
            $sql="insert into content(n_title, n_shortcontent, n_longcontent,n_author, n_date, n_picture)
            values('$tieude', '$noidungngan', '$noidungdu','$tacgia', '$ngay','$anh')"; echo $sql;

            $run=mysqli_query($conn, $sql);
            return $run;
        }
        function delete_TTDK($id_user)
        {
            global $conn;
            $sql="delete from dangkytt where id_user='$id_user'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        

          /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          public function xemhoadon($id) {
            global $conn;
            $sql = "Select * from hoadondochoi where ma_hoadon=$id";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
          public function xemAlldonhang() {
            global $conn;
            $sql = "Select * from hoadondochoi ";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
          public function insert_DM($tenDM,$Mota,$AnhDM)
          {
              global $conn;
              $sql = "INSERT INTO danh_muc (ten_danh_muc, mo_ta,Anh_DM)
              VALUES ('$tenDM', '$Mota','$AnhDM')";
              $run = mysqli_query($conn,$sql) ;
              return $run;
          } 
          public function insert_SP($tensp,$gia,$soluong,$dotuoi,$Hinhanh,$mota,$madanhmuc,$date)
          {
              global $conn;
              $sql = "INSERT INTO san_pham (ten_san_pham, gia, so_luong, do_tuoi_phu_hop, hinh_anh, mo_ta, ma_danh_muc,Ngay_them_moi)
              VALUES ('$tensp', $gia, $soluong, '$dotuoi', '$Hinhanh', '$mota', $madanhmuc,'$date')";
              $run= mysqli_query($conn,$sql);
                return $run;
          } 
          public function select_allIDSP($id_sp)
          {
          global $conn;
          $sql="select * from san_pham where ma_san_pham='$id_sp'";
          $run=mysqli_query($conn,$sql);
          return $run;
           }
         function update_SP($tensp,$soluong,$pic,$theloai,$date,$gia,$mota,$dotuoi,$ID_sp)
        {
            global $conn;
            $sql="update san_pham set ten_san_pham='$tensp', so_luong='$soluong',hinh_anh ='$pic',ma_danh_muc='$theloai',Ngay_them_moi='$date',gia=$gia,mo_ta='$mota',do_tuoi_phu_hop='$dotuoi' where ma_san_pham='$ID_sp'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
        function update_HD($hoten,$SDT,$diachi,$phuongthuc,$gia,$trangthai,$ID_HD)
        {
            global $conn;
            $sql="update hoadondochoi set HotenKH='$hoten', SDT='$SDT',Diachi ='$diachi',Phuongthuc='$phuongthuc',gia=$gia,trang_thai='$trangthai' where ma_hoadon='$ID_HD'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
        function update_DM($tendm,$mota,$anh,$ID_DM)
        {
            global $conn;
            $sql="update danh_muc set ten_danh_muc='$tendm', mo_ta='$mota',Anh_DM ='$anh'where ma_danh_muc='$ID_DM'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
        public function select_allDM()
        {
        global $conn;
        $sql="select * from danh_muc";
        $run=mysqli_query($conn,$sql);
        return $run;
         }
         public function select_allIDDM($ID_DM)
         {
         global $conn;
         $sql="select * from danh_muc where ma_danh_muc='$ID_DM'";
         $run=mysqli_query($conn,$sql);
         return $run;
          }
         public function select_allSPtheoDM($ID_DM)
         {
         global $conn;
         $sql="select * from san_pham where id='$ID_DM'";
         $run=mysqli_query($conn,$sql);
         return $run;
          }
        public function select_allSP()
        {
        global $conn;
        $sql="select * from san_pham";
        $run=mysqli_query($conn,$sql);
        return $run;
         }
      
         function delete_TTSP($ID_sp)
         {
             global $conn;
             $sql="delete from san_pham where ma_san_pham='$ID_sp'";
             $run=mysqli_query($conn,$sql);
             return $run;
         }
         function delete_DM($ID_DM)
         {
            global $conn;
            $sql="delete from danh_muc where ma_danh_muc='$ID_DM'";
            $run = mysqli_query($conn,$sql);
            return $run;
         }
         
         function delete_HD($ID_HD)
         {
             global $conn;
             $sql="delete from hoadondochoi where ma_hoadon='$ID_HD'";
             $run=mysqli_query($conn,$sql);
             return $run;
         }
         function delete_CTHD($ID_HD)
         {
             global $conn;
             $sql="delete from chi_tiet_don_hang where ma_hoadon='$ID_HD'";
             $run=mysqli_query($conn,$sql);
             return $run;
         }

         public function Thongke() {
            
            global $conn;
            $sql = "SELECT * FROM hoadondochoi " ;
            $result = mysqli_query($conn, $sql);
            $data = array();
            if ($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
            }
            return $data; 
        }
        public function ThongkeTheoNgay($ngay) {
            global $conn;

            // Kiểm tra định dạng ngày (YYYY-MM-DD)
            if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $ngay)) {
                return []; // Trả về rỗng nếu sai định dạng
            }

            $sql = "SELECT * FROM hoadondochoi WHERE DATE(ngay_tao) = '$ngay' ";
            $result = mysqli_query($conn, $sql);

            $data = [];
            if ($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
            }

            return $data;
        }

        public function ThongkeTheoThang($thang, $nam) {
    global $conn;

    // Ép kiểu rõ ràng để tránh injection
            $thang = (int)$thang;
            $nam = (int)$nam;

            // Giới hạn phạm vi để an toàn hơn
            if ($thang < 1 || $thang > 12 || $nam < 2020 || $nam > date('Y')) {
                return [];
            }

            $sql = "SELECT * FROM hoadondochoi WHERE MONTH(ngay_tao) = $thang AND YEAR(ngay_tao) = $nam ";
            $result = mysqli_query($conn, $sql);

            $data = [];
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }
            }

            return $data;
        }
    }
?>