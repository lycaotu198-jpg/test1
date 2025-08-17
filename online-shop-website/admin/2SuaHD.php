
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
                            $select=$get_data->xemhoadon($_GET['idd']);
                            foreach($select as $se_pro)
                            {
                        ?>
                        <div class="panel-body">
                            <form method="post" action="../Controller/ControllerAdmin.php" >
                                        <div class="form-group">
                                            <label>Họ tên người nhận</label>
                                            <input class="form-control" type="text" name="txtten" value="<?php echo $se_pro['HotenKH']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Số điện thoại</label>
                                            <input class="form-control" type="text" name="txtsdt" value="<?php echo $se_pro['SDT']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <input class="form-control" type="text" name="txtdc" value="<?php echo $se_pro['Diachi']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Phương thức</label>
                                            <input class="form-control" type="text" name="txtpt" value="<?php echo $se_pro['Phuongthuc']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá tiền </label>
                                            <input class="form-control" type="text" name="txtgia" value="<?php echo $se_pro['gia']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Trạng thái</label>
                                            <select name="trang_thai" class="form-control">
                                                <option value="Đã thanh toán">Đã thanh toán</option>
                                                <option value="Đang xử lý" >Đang xử lý</option>
                                                <option value="Đang giao hàng" >Đang giao hàng</option>
                                                <option value="Giao hàng chậm">Giao hàng chậm</option>
                                                <option value="Đơn bị hủy">Đơn bị hủy</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="id_hd" value="<?php echo $se_pro['ma_hoadon'] ?>">
                                        <button type="submit" name="btnsuaHD" class="btn btn-info">Sửa thông tin </button>
                            </form>
                            <?php } ?>
                        </div>
                </div>
        </div>
</div>

<?php include('footer.php') ?>

