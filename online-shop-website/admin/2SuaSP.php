
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
                            $select=$get_data->select_allIDSP($_GET['idd']);
                            foreach($select as $se_pro)
                        ?>
                        <div class="panel-body">
                            <form method="post" >
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input class="form-control" type="text" name="txttensp" value="<?php echo $se_pro['ten_san_pham']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng</label>
                                            <input class="form-control" type="text" name="txtsl" value="<?php echo $se_pro['so_luong']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>độ tuổi</label>
                                            <input class="form-control" type="text" name="txttuoi" value="<?php echo $se_pro['do_tuoi_phu_hop']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Thể loại</label>
                                            <input class="form-control" type="text" name="txttheloai" value="<?php echo $se_pro['ma_danh_muc']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá tiền </label>
                                            <input class="form-control" type="text" name="txtgia" value="<?php echo $se_pro['gia']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày chỉnh sửa </label>
                                            <input class="form-control" type="date" name="txtngay" value="<?php echo $se_pro['Ngay_them_moi']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Up ảnh mới</label>
                                            <input type="file" name="upAV" value="<?php echo $se_pro['hinh_anh']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea class="form-control" rows="3" name="mmota" ><?php echo $se_pro['mo_ta']?></textarea>
                                        </div>
                                        <button type="submit" name="btnsuaSP" class="btn btn-info">Sửa thông tin </button>
                            </form>
                        </div>
                </div>
        </div>
</div>

<?php include('footer.php') ?>

<?php 
    if(isset($_POST['btnsuaSP']))
    {
        if (empty($_POST['txttensp'])||empty($_POST['txtsl']))
            {
                 echo "<script>alert('Vui lòng điền đầy đủ thông tin');</script>";
            }
         else{
                $suasp= $get_data->update_SP($_POST['txttensp'],$_POST['txtsl'],$_POST['upAV'],$_POST['txttheloai'],$_POST['txtngay'],$_POST['txtgia'],$_POST['mmota'],$_POST['txttuoi'],$_GET['idd']);
                if ($suasp) 
                {
                    echo "<script>alert('Sản phẩm đã được sửa thông tin');
                    window.location='../admin/2Danhsachsp.php' 
                    </script>";
                } 
                else 
                {
                    echo "<script>alert('sản phẩm chưa được sửa thông tin');</script>";
                }
            }
    }
?>