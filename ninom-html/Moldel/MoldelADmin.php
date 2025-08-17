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
       
        public function select_where($username,$password)
        {
            global $conn;
            $sql= "SELECT * from dangkytt where username='$username' and password='$password'";
            $run=mysqli_query($conn, $sql);
            $num=mysqli_num_rows($run);
            if ($num > 0) {
                return true; // Có bản ghi đúng
            } else {
                return false; // Không có bản ghi đúng
            }
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
         function update_tt($username, $password,$Address,$av,$genger,$hobby,$email,$ID_user)
         {
             global $conn;
             $sql="update dangkytt set username='$username', password='$password',address ='$Address',avatar='$av',genger='$genger',hobby='$hobby',email= '$email'where id_user= $ID_user";
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
          public function insert_SP($tensp,$soluong,$pic,$theloai,$date,$gia,$mota)
          {
              global $conn;
              $sql = "INSERT INTO tt_SP (id_SP, Tensp, soluong, picture, theloai, date, gia, mota)
                  VALUES ('NULL','$tensp', '$soluong','$pic', '$theloai', '$date','$gia', '$mota')";
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
         function update_SP($tensp,$soluong,$pic,$theloai,$date,$gia,$mota,$ID_sp)
        {
            global $conn;
            $sql="update tt_sp set Tensp='$tensp', soluong='$soluong',picture ='$pic',theloai='$theloai',date='$date',gia='$gia',mota='$mota' where id_SP=$ID_sp";
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
     
    }
?>