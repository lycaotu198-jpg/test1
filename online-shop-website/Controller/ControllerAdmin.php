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
                include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                $data=new DATA();
                $adduser=$data->insert_SP($_POST['name'],$_POST['gia'],$_POST['SL'],$_POST['Tuoi'],$_POST['upAV'],$_POST['mota'],$_POST['loai'],$_POST['date']);
                                
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

<?php 
                            
    if (isset($_POST ['btnthemDM']) )
        {
            if (empty($_POST['name'])||empty($_POST['Mota']))
            {
                 echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
            }
            else
            {
                include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                $data=new DATA();
                $adduser=$data->insert_DM($_POST['name'],$_POST['Mota'],$_POST['upAVdm']);
                                
                if ($adduser) 
                {
                    echo "<script>alert('Sản phẩm đã được thêm mới');
                    window.location='../admin/2Danhsachdm.php' 
                    </script>";
                } 
                else 
                {
                    echo "<script>alert('sản phẩm chưa được thêm mới');</script>";
                }
            }
        }
?>
<?php 
    if(isset($_POST['btnsuaHD']))
    {
        if (empty($_POST['txtten'])||empty($_POST['txtsdt']))
            {
                 echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
            }
         else{
                include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                $get_data=new DATA();
                $suasp= $get_data->update_HD($_POST['txtten'],$_POST['txtsdt'],$_POST['txtdc'],$_POST['txtpt'],$_POST['txtgia'],$_POST['trang_thai'],$_POST['id_hd']);
                if ($suasp) 
                {
                    echo "<script>alert('Đơn hàng đã được sửa thông tin');
                    window.location='../admin/2DanhsachHoaDon.php' 
                    </script>";
                } 
                else 
                {
                    echo "<script>alert('Đơn hàng chưa được sửa thông tin');</script>";
                }
            }
    }
?>

<?php
    if(isset($_POST ['btnsuaTTKH']))
    {
        include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
        $get_data=new DATA();
        $update=$get_data->update_tt($_POST['txtusser'],$_POST['txtmk'],$_POST['diachi'],$_POST['upAV'],$_POST['option'],$_POST['txtsothich'],$_POST['txtemail'],$_POST['Quyen'],$_POST['idd']);
        if($update)
        {
            echo "<script>alert('Sửa thông tin thành công');
            window.location='../admin/1danhsachkh.php' 
            </script>";
        } 
        else echo"Cập thật không thành công";
    }
 ?>
