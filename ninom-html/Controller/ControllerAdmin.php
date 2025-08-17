<?php 
                            
    if (isset($_POST ['btnthemAD']) )
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
                    include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
                    $data=new DATA();
                    
                    $selecttk=$data->select_KTuser($_POST["username"]);
                        
                        if($selecttk==0)
                            {
                            $adduser=$data->insert_TK($_POST['username'],$_POST['Password'],$_POST['txtDiachi'],$_POST['upAV'],$_POST['option'],$_POST['txtsothich'],$_POST['txtEmail']);
                                    
                            if ($adduser) 
                                {
                                echo "<script>alert('Khách hàng đã được thêm mới');
                                    window.location='../admin/1danhsachkh.php' 
                                    </script>";
                                } 
                            else 
                                {
                                    echo "<script>alert('Khách hàng chưa được thêm mới');</script>";
                                }
                            } 
                        else
                        {
                         echo "<script>alert('User đã có người dùng hãy chọn User khác')
                         window.location='../admin/login.php' 
                        </script>";
                        }
                           
                    }            
        }
?>

                        

<?php 
                            
    if (isset($_POST ['btnthemSP']) )
        {
            if (empty($_POST['name'])||empty($_POST['SL']))
            {
                 echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
            }
            else
            {
                include('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
                $data=new DATA();
                $adduser=$data->insert_SP($_POST['name'],$_POST['SL'],$_POST['upAV'],$_POST['loai'],$_POST['date'],$_POST['gia'],$_POST['txtmota']);
                                
                if ($adduser) 
                {
                    echo "<script>alert('Sản phẩm đã được thêm mới');
                    window.location='../admin/2Danhsachsp.php' 
                    </script>";
                } 
                else 
                {
                    echo "<script>alert('sản phẩm chưa được thêm mới');</script>";
                }
            }
        }
?>

