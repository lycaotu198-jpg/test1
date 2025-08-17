<?php include('Head.php') ?>
<?php include('top_head.php') ?>
<?php include('nav.php') ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">THỐNG KÊ HÓA ĐƠN</h1>
            </div>
        </div>
       <form method="GET" class="form-inline mb-4">
            <label for="ngay">Chọn ngày:</label>
            <input type="date" name="ngay" id="ngay" class="form-control"
                value="<?= isset($_GET['ngay']) ? htmlspecialchars($_GET['ngay']) : '' ?>">
            <button type="submit" name="submit_ngay" class="btn btn-primary ml-2">Xem theo ngày</button>
        </form>
        <form method="GET" class="form-inline mb-4">
            <label for="thang">Tháng:</label>
            <select name="thang" id="thang" class="form-control">
                <option value="">--Chọn--</option>
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <option value="<?= $i ?>" <?= (isset($_GET['thang']) && $_GET['thang'] == $i) ? 'selected' : '' ?>>
                        Tháng <?= $i ?>
                    </option>
                <?php endfor; ?>
            </select>
        <label for="nam">Năm:</label>
        <select name="nam" id="nam" class="form-control">
            <option value="">--Chọn--</option>
            <?php 
                $currentYear = date('Y');
                for ($y = $currentYear; $y >= 2020; $y--): ?>
                <option value="<?= $y ?>" <?= (isset($_GET['nam']) && $_GET['nam'] == $y) ? 'selected' : '' ?>>
                    <?= $y ?>
                </option>
            <?php endfor; ?>
        </select>

        <button type="submit" name="submit_thang" class="btn btn-primary ml-2">Xem theo tháng</button>
    </form>

        <?php
        include('C:\xampp\htdocs\online-shop-website-template\Moldel\MoldelADmin.php');
        $data = new DATA();
        $allOrders = [];
        $total = 0;
        $paid = 0;
        $cancelled = 0;

        // Lọc theo ngày hoặc theo tháng/năm
        // Lọc theo loại submit
           if (isset($_GET['submit_ngay']) && !empty($_GET['ngay'])) {
                $ngay = $_GET['ngay'];
                if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $ngay)) {
                    $allOrders = $data->ThongkeTheoNgay($ngay);
                }
            } elseif (isset($_GET['submit_thang']) && !empty($_GET['thang']) && !empty($_GET['nam'])) {
                $thang = (int)$_GET['thang'];
                $nam = (int)$_GET['nam'];
                if ($thang >= 1 && $thang <= 12 && $nam >= 2020 && $nam <= date('Y')) {
                    $allOrders = $data->ThongkeTheoThang($thang, $nam);
                }
            } else {
                $allOrders = $data->Thongke(); // mặc định: tất cả hóa đơn
            }
        // Thống kê
        foreach ($allOrders as $order) {
            if ($order['trang_thai'] === 'Đã thanh toán') {
                $total += $order['gia'];
                $paid++;
            } elseif ($order['trang_thai'] === 'Đơn bị hủy') {
                    $cancelled++;
                } 
            }       
        $count = count($allOrders);
        ?>

        <!-- Thống kê tổng quan -->
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">Tổng số hóa đơn</div>
                    <div class="panel-body"><h3><?= $count ?></h3></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-info ">
                    <div class="panel-heading">Doanh thu</div>
                    <div class="panel-body"><h3><?= number_format($total, 0, ',', '.') ?> VNĐ</h3></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">Hóa đơn đã thanh toán</div>
                    <div class="panel-body"><h3><?= $paid ?></h3></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-danger">
                    <div class="panel-heading">Hóa đơn đã hủy</div>
                    <div class="panel-body"><h3><?= $cancelled ?></h3></div>
                </div>
            </div>
     </div>
</div>

<?php include('footer.php') ?>
