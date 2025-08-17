<?php
    include("Connect.php");
    class DATA
    {
        public function insert_TK($username,$password,$Address,$Av,$gender,$hobby,$email)
        {
            global $conn;
            $sql = "INSERT INTO dangkytt (id_user, username, password, type, address, avatar, genger, hobby, email)
                VALUES ('NULL','$username', '$password','Null', '$Address', '$Av','$gender', '$hobby', '$email')";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }   
        public function select_TTCN($user)
        {
            global $conn;
            $sql = "Select * from dangkytt where username='$user' and Quyen='User'";
            $run = mysqli_query($conn, $sql);
            return $run;

        }
        public function select_KTuser($user)
        {
            global $conn;
            $sql = "Select * from dangkytt where username='$user' and Quyen='User'";
            $run = mysqli_query($conn, $sql);
            return mysqli_num_rows($run); 

        }
        function Xem_DM()
         {
             global $conn;
             $sql="select * from danh_muc";
             $run=mysqli_query($conn,$sql);
             return $run;
         }
        public function llmk($username,$email)
        {
            global $conn;
            $sql = "SELECT password FROM dangkytt WHERE username = '$username' and email='$email'"; 
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        public function xemdonhang($id_user) {
            global $conn;
            $sql = "Select * from hoadondochoi where ma_nguoi_dung=$id_user";
            $run = mysqli_query($conn,$sql) ;
            $result = [];
            if ($run) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $result[] = $row;
                }
            }
            return $result; 
        }
        
        public function update_soluong($quantity,$product_id) {
            global $conn;
            $sql = "UPDATE san_pham SET so_luong = so_luong - $quantity WHERE ma_san_pham = $product_id";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        public function update_soluongcong($quantity,$product_id) {
            global $conn;
            $sql = "UPDATE san_pham SET so_luong = so_luong + $quantity WHERE ma_san_pham = $product_id";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        
        
        public function insert_gh($id_user,$Hoten,$Sdt,$Diachi,$Phuongthuc,$gia)
          {
              global $conn;
              $sql = "INSERT INTO hoadondochoi (ma_nguoi_dung,HotenKH, SDT,Diachi, Phuongthuc, gia) 
              VALUES ($id_user,'$Hoten', '$Sdt', '$Diachi', '$Phuongthuc', '$gia')";      
              $run = mysqli_query($conn,$sql) ;
              return $run;
          } 
        
          public function select_allIDSP($id_sp)
          {
            global $conn;
            $sql="select * from san_pham where ma_san_pham='$id_sp'";
            $run=mysqli_query($conn,$sql);
            return $run;
           }
         
         function update_SP($tensp,$soluong,$pic,$theloai,$date,$gia,$mota,$ID_sp)
        {
            global $conn;
            $sql="update tt_sp set Tensp='$tensp', soluong='$soluong',picture ='$pic',theloai='$theloai',date='$date',gia='$gia',mota='$mota' where id_SP='$ID_sp'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
        public function select_allSP()
        {
            global $conn;
            $sql="select * from san_pham";
            $run=mysqli_query($conn,$sql);
            return $run;
         }
         public function select_allSPDM($ID_DM)
        {
            global $conn;
            $sql="select * from san_pham where ma_danh_muc='$ID_DM'";
            $run=mysqli_query($conn,$sql);
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
         function delete_GH($ID_gh)
         {
             global $conn;
             $sql="delete from hoadondochoi where ma_hoadon='$ID_gh'";
             $run=mysqli_query($conn,$sql);
             return $run;
         }
        public function count_SP() {
            global $conn;
            $sql = "SELECT COUNT(*) as total FROM tt_sp";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function count_limit($limit,$start) {
            global $conn;
            $sql = "SELECT * FROM san_pham ORDER BY Ngay_them_moi DESC LIMIT $limit OFFSET $start";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        public function select_where($username,$password)
        {
            global $conn;
            $sql= "SELECT * from dangkytt where username='$username' and password='$password'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }
        public function timSP($kew)
        {
            global $conn;
            $sql= "SELECT * FROM `san_pham` WHERE ten_san_pham like '%$kew%'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }
        public function select_top10SPmoi()
        {
        global $conn;
        $sql="SELECT * 
        FROM san_pham
        ORDER BY so_like DESC
        LIMIT 8;
        ";
        $run=mysqli_query($conn,$sql);
        return $run;
         }
         public function select_ID($ID)
        {
            global $conn;
            $sql="select * from dangkytt where id_user='$ID'";
            $run=mysqli_query($conn, $sql) ;
            return $run;
        } public function select_CTHD($ID)
        {
            global $conn;
            $sql="select chi_tiet_don_hang.ma_san_pham, ten_san_pham, hinh_anh, gia,chi_tiet_don_hang.so_luong as soluong, mo_ta from chi_tiet_don_hang,san_pham where chi_tiet_don_hang.ma_san_pham= san_pham.ma_san_pham and ma_hoadon='$ID'";
            $run=mysqli_query($conn, $sql) ;
            return $run;
        }
        function update_tt($username, $password,$Address,$av,$hobby,$email,$ID_user)
        {
            global $conn;
            $sql="update dangkytt set username='$username', password='$password',address ='$Address',avatar='$av',hobby='$hobby',email= '$email'where id_user= '$ID_user'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
        function like($IDsp)
        {
            global $conn;
            $sql="update san_pham set so_like = so_like + 1 where ma_san_pham = '$IDsp'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
        public function get_last_order_id() {
            global $conn;
            $sql = "SELECT MAX(ma_hoadon) AS id FROM hoadondochoi";
            $run = mysqli_query($conn, $sql);
        
            if ($run && mysqli_num_rows($run) > 0) {
                $row = mysqli_fetch_assoc($run);
                return $row['id'];
            } else {
                return null; 
            }
        }
        public function insert_chi_tiet_dh($id_dh, $id_sp, $so_luong, $gia) {
            global $conn;
            $sql="INSERT INTO chi_tiet_don_hang (ma_hoadon, ma_san_pham,so_luong, don_gia) VALUES ('$id_dh','$id_sp', '$so_luong', '$gia')";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }
         public function select_where_KH($username,$password)
        {
            global $conn;
            $sql= "SELECT * from dangkytt where username='$username' and password='$password' and Quyen='User'";
            $run=mysqli_query($conn, $sql);
            return $run;
            
        }
        function Huy_hoadon($ID_HD)
        {
            global $conn;
            $sql="update hoadondochoi set trang_thai='Đơn bị hủy' where ma_hoadon='$ID_HD'";
            $run=mysqli_query($conn, $sql); 
            return $run;
        }


        
    }
?>