

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Liên Hệ</h5>
                <p class="mb-4">Chúng tôi chuyên cung cấp các loại đồ chơi an toàn, chất lượng cho trẻ em ở mọi độ tuổi. Mọi thắc mắc vui lòng liên hệ với chúng tôi.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Đường ABC, Hà Nội, Việt Nam</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>lienhe@dochoitreem.vn</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+84 123 456 789</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Danh Mục Nhanh</h5>
                        <?php 

                        $get_data=new DATA;
                        $select=$get_data->Xem_DM();
                        foreach($select as $se_dm):
                         ?>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="Theodanhmuc.php?id=<?php echo $se_dm['ma_danh_muc']?>"><i class="fa fa-angle-right mr-2"></i><?php echo $se_dm['ten_danh_muc'] ?> </a>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Tài Khoản Của Tôi</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Trang Chủ</a>
                            <a class="text-secondary mb-2" href="cuahang.php"><i class="fa fa-angle-right mr-2"></i>Cửa Hàng</a>
                            <a class="text-secondary mb-2" href="Giohang.php"><i class="fa fa-angle-right mr-2"></i>Giỏ Hàng</a>
                            <a class="text-secondary mb-2" href="Hoadon.php"><i class="fa fa-angle-right mr-2"></i>Thanh Toán</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Liên Hệ</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Đăng Ký Nhận Tin</h5>
                        <p>Hãy để lại email để nhận các chương trình khuyến mãi và sản phẩm mới nhất từ chúng tôi.</p>
                        <form method="post" action="../Controller/ControllerGuest.php">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Nhập địa chỉ email của bạn">
                                <div class="input-group-append">
                                    <button type="submit" name="dk" class="btn btn-primary">Đăng Ký</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Theo Dõi Chúng Tôi</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="https://x.com/?lang=vi"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">caolytoys.vn</a>. Bản quyền đã được bảo hộ. Thiết kế bởi
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>

    <!-- Footer End -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>