
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
                            include ('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
                            $get_data=new DATA();
                            $select=$get_data->select_allIDDM($_GET['idd']);
                            foreach($select as $se_pro)
                        ?>
                        <div class="panel-body">
                            <form method="post" >
                            <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input class="form-control" type="text" name="name" value="<?php echo $se_pro['ten_danh_muc'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <input class="form-control" type="text" name="Mota" value="<?php echo $se_pro['mo_ta'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh</label>
                                            <input type="file" name="upAVdm">
                                        </div>
                                        <button type="submit" name="btnsuadm" class="btn btn-info">Sửa thông tin </button>
                            </form>
                        </div>
                </div>
        </div>
</div>

<?php include('footer.php') ?>

<?php 
    if(isset($_POST['btnsuadm']))
    {
        if (empty($_POST['name'])||empty($_POST['Mota']))
            {
                 echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
            }
         else{
                $suasp= $get_data->update_DM($_POST['name'],$_POST['Mota'],$_POST['upAVdm'],$_GET['idd']);
                if ($suasp) 
                {
                    echo "<script>alert('Sản phẩm đã được sửa thông tin');
                    window.location='../admin/2Danhsachdm.php' 
                    </script>";
                } 
                else 
                {
                    echo "<script>alert('sản phẩm chưa được sửa thông tin');</script>";
                }
            }
    }
?>