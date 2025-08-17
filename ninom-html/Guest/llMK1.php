<!DOCTYPE html>
<html>

<?php
include('Head.php');
?>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Ninom
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->
  <?php
include('nav.php');
?>

  <!-- end nav section -->


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-2 col-md-10 offset-md-1">
          <div class="heading_container">
            <hr>
            <h2>
              LẤY LẠI MẬT KHẨU
            </h2>
          </div>
        </div>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-lg-6 offset-lg-2 col-md-5 offset-md-1">
          <form method="post" action="../Controller/ControllerGuest.php">


              <div class="contact_form-container">
                <div>
                  <form method="post">
                  <div>
                    <input type="text" name="username" placeholder="User Name" />
                  </div>
                  <div>
                    <input type="email" name="email" placeholder="Email" />
                  </div>
                  <div>
                    <button type="submit" name="btllmk1">
                      Gửi
                    </button>
                    
                  </div>
                  </form>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  

  <!-- end info section -->


  <!-- footer section -->
  <?php
include('footer.php');
?>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>