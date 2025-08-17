
<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>
<div id="page-wrapper">
<div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          <h1>Thêm khách hàng</h1>
                        </div>
                       
                        <div class="panel-body">
                            <form method="post" action="../Controller/ControllerAdmin.php" role="form">
                                        <div class="form-group">
                                            <label>Tên đăng nhập</label>
                                            <input class="form-control" type="text" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input class="form-control" type="password" name="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Nhập lại mật khẩu</label>
                                            <input class="form-control" type="password" name="REPassword">
                                        </div>
                                        <div class="form-group">
                                            <label>Giới tính: </label>
                                            <input type="radio" name="option" value="Nam">Nam
                                            <input type="radio" name="option" value="Nữ">Nữ
                                        </div>
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <input type="file" name="upAV">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" name="txtEmail">
                                        </div>
                                        <div class="form-group">
                                            <label>Sở thích</label>
                                            <textarea class="form-control" rows="3" name="txtsothich"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ</label>
                                            <textarea class="form-control" rows="3" name="txtDiachi"></textarea>
                                        </div>
                                        <button type="submit" name="btnthemAD" class="btn btn-info">Thêm tài khoản </button>
                            </form>
                        </div>
                </div>
                            
            
            </div>
</div>

<?php include('footer.php') ?>