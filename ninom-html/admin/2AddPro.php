
<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
<div id="page-wrapper">
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          <h1>Thêm mới sản phẩm</h1>
                        </div>
                        
                        <div class="panel-body">
                            <form method="post"  action="../Controller/ControllerAdmin.php" role="form">
                                        <div class="form-group">
                                            <label>Tên sản phẩm</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>số lượng sản phẩm</label>
                                            <input class="form-control" type="text" name="SL">
                                        </div>
                                        <div class="form-group">
                                            <label>Loại</label>
                                            <input class="form-control" type="text" name="loai">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày thêm mới</label>
                                            <input class="form-control" type="date" name="date">
                                        </div>               
                                        <div class="form-group">
                                            <label>Ảnh</label>
                                            <input type="file" name="upAV">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Giá tiền</label>
                                            <input class="form-control" type="gia" name="gia">
                                        </div>
                                        <div class="form-group">
                                            <label>mô tả</label>
                                            <textarea class="form-control" rows="3" name="txtmota"></textarea>
                                        </div>
                                        <button type="submit" name="btnthemSP" class="btn btn-info">Thêm mới sản phẩm </button>
                            </form>
                        </div>
                </div>
                            </div>
</div>
<?php include('footer.php') ?>