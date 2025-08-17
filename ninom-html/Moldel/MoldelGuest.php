<?php
    include("Connect.php");
    class DATA
    {
        public function llmk($username,$email)
        {
            global $conn;
            $sql = "SELECT password FROM dangkytt WHERE username = '$username' and email='$email'"; 
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        public function xemdonhang($id_user) {
            global $conn;
            $sql = "Select * from thanhtoan where id_user=$id_user";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        public function update_soluong($quantity,$product_id) {
            global $conn;
            $sql = "UPDATE tt_sp SET soluong = soluong - $quantity WHERE id_SP = $product_id";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        public function update_soluongcong($quantity,$product_id) {
            global $conn;
            $sql = "UPDATE tt_sp SET soluong = soluong + $quantity WHERE id_SP = $product_id";
            $run = mysqli_query($conn,$sql) ;
            return $run;
        }
        
        
        public function insert_gh($id_user,$Hoten,$Sdt,$Diachi,$Phuongthuc,$gia)
          {
              global $conn;
              $sql = "INSERT INTO thanhtoan (id_user,HotenKH, SDT, Diachi, Phuongthuc, gia) 
              VALUES ($id_user,'$Hoten', '$Sdt', '$Diachi', '$Phuongthuc', '$gia')";      
              $run = mysqli_query($conn,$sql) ;
              return $run;
          } 
        
          public function select_allIDSP($id_sp)
          {
            global $conn;
            $sql="select * from tt_sp where id_SP='$id_sp'";
            $run=mysqli_query($conn,$sql);
            return $run;
           }
           public function select_3SP()
          {
            global $conn;
            $sql="    SELECT * 
                        FROM tt_sp 
                        ORDER BY date DESC 
                        LIMIT 3;";
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
            $sql="select * from tt_SP";
            $run=mysqli_query($conn,$sql);
            return $run;
         }
       
         function delete_TTSP($ID_sp)
         {
             global $conn;
             $sql="delete from tt_sp where id_SP='$ID_sp'";
             $run=mysqli_query($conn,$sql);
             return $run;
         }
         function delete_HD($ID_HD)
         {
             global $conn;
             $sql="delete from thanhtoan where id_hoadon='$ID_HD'";
             $run=mysqli_query($conn,$sql);
             return $run;
         }
         function delete_GH($ID_gh)
         {
             global $conn;
             $sql="delete from thanhtoan where id_hoadon='$ID_gh'";
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
            $sql = "SELECT * FROM tt_sp ORDER BY date DESC LIMIT $limit OFFSET $start";
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
        
     
    }
?>