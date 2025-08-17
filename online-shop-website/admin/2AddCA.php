
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
                                            <label>Tên danh mục</label>
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <input class="form-control" type="text" name="Mota">
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh</label>
                                            <input type="file" name="upAVdm">
                                        </div>
                                        <button type="submit" name="btnthemDM" class="btn btn-info">Thêm mới danh mục </button>
                            </form>
                        </div>
                </div>
                            </div>
</div>
<?php include('footer.php') ?>