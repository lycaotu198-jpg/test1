
<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
<div id="page-wrapper">
    <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          <h1>Sửa thông tin khách hàng</h1>
                        </div>
                        <?php 
                            include ('C:\xampp\htdocs\ninom-html\Moldel\MoldelADmin.php');
                            $get_data=new DATA();
                            $select=$get_data->select_ID($_GET['idd']);
                            foreach($select as $se_pro)
                        ?>
                        <div class="panel-body">
                            <form method="post" >
                                        <div class="form-group">
                                            <label>Tên đăng nhập</label>
                                            <input class="form-control" type="text" name="txtusser" value="<?php echo $se_pro['username']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input class="form-control" type="password" name="txtmk" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập lại mật khẩu</label>
                                            <input class="form-control" type="password" name="txtremk">
                                        </div>
                                        <div class="form-group">
                                            <label>Chọn Giới tính mới: </label>
                                            <input type="radio" name="option" value="Nam">Nam
                                            <input type="radio" name="option" value="Nữ">Nữ
                                        </div>
                                        <div class="form-group">
                                            <label>Up Avatar mới</label>
                                            <input type="file" name="upAV">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="txtemail" value="<?php echo $se_pro['email']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Sở thích</label>
                                            <textarea class="form-control" rows="3" name="txtsothich"><?php echo $se_pro['hobby']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <textarea class="form-control" rows="3" name="diachi" ><?php echo $se_pro['address']?></textarea>
                                        </div>
                                        <button type="submit" name="btnsuaTTKH" class="btn btn-info">Sửa thông tin </button>
                            </form>
                        </div>
                        
                </div>
        </div>
</div>

<?php include('footer.php') ?>
<?php
    if(isset($_POST ['btnsuaTTKH']))
    {
        $update=$get_data->update_tt($_POST['txtusser'],$_POST['txtmk'],$_POST['diachi'],$_POST['upAV'],$_POST['option'],$_POST['txtsothich'],$_POST['txtemail'],$_GET['idd']);
        if($update)
        {
            echo "<script>alert('Sửa thông tin thành công');
            window.location='../admin/1danhsachkh.php' 
            </script>";
        } 
        else echo"Cập thật không thành công";
    }
 ?>
