<!DOCTYPE html>
<html>


<body> 
  <!-- fruit section -->
  <head>
  <?php include('Head.php') ?>
  <style>
    .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.pagination a {
    text-decoration: none;
    padding: 10px 20px;
    margin: 0 5px;
    border: 1px solid #ddd;
    color: #333;
    border-radius: 5px;
    font-size: 16px;
    transition: all 0.3s ease;
}

.pagination a:hover {
    background-color: #28a745;
    color: white;
}

.pagination .active {
    background-color:rgb(27, 236, 219);
    color: white;
    border-color:rgb(38, 192, 51);
}

.pagination .prev-next-btn {
    font-weight: bold;
    background-color: #f8f9fa;
    color:rgb(2, 1, 12);
}

.pagination .prev-next-btn:hover {
    background-color:rgb(243, 141, 7);
    color: white;
}

  </style>
</head>
<div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.php">
        <span>
          Ninom
        </span>
      </a>
    </div>
    <!-- end header section -->
    
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="img-box">
              <img src="images/slider-img.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
            <div class="img-box">
              <img src="images/slider-img.jpg" alt="">
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <?php include('nav.php') ?>
  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Tươi mỗi ngày
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="fruit_container">
      <?php 
          include('C:\xampp\htdocs\ninom-html\Moldel\MoldelGuest.php');
          $get_data=new DATA();
          $select=$get_data->select_allSP();
          $numofpage=6;
          $total=mysqli_num_rows($select);
          $total_page=ceil($total/$numofpage);
          if(isset($_GET['page'])) $page=$_GET['page'];
          else $page=1;
          $startpage=(($page-1)*$numofpage);
          $select_product_limit=$get_data->count_limit($numofpage,$startpage,);
          foreach($select_product_limit as $se_pro)
          {
      ?>
          <div class="box">
          <img src="../Guest/images/<?php echo $se_pro['picture']; ?>" width="400" height="400">
            <div class="link_box">
              <h5>
              <?php echo $se_pro['Tensp'] ?>
              </h5>
              <a href="ttsp.php?id=<?php echo$se_pro['id_SP'] ?>">
                Mua ngay
              </a>
            </div>
          </div>
        <?php } ?>
       <br>
      
      </div>
    </div>
    <div class="pagination">
          <?php if ($page > 1): ?>
              <a href="?page=<?php echo ($page - 1); ?>" class="prev-next-btn">&laquo; Trang trước</a>
          <?php endif; ?>

          <?php for ($i = 1; $i <= $total_page; $i++): ?>
              <a href="?page=<?php echo $i; ?>" class="page-btn <?php echo ($i == $page) ? 'active' : ''; ?>">
                  <?php echo $i; ?>
              </a>
          <?php endfor; ?>

          <?php if ($page < $total_page): ?>
              <a href="?page=<?php echo ($page + 1); ?>" class="prev-next-btn">Trang sau &raquo;</a>
          <?php endif; ?>
      </div>
<br>
    <?php include('footer.php') ?> 
     
  </section>
 

  </body>
  <!-- footer section -->
 