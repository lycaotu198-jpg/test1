<!DOCTYPE html>
<html>


<body>

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          TOP HÔM NAY
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="fruit_container">
      <?php 
          include('C:\xampp\htdocs\ninom-html\Moldel\MoldelGuest.php');
          $get_data=new DATA();
          $select=$get_data->select_3SP();
          foreach($select as $se_pro)
          {
      ?>
          <div class="box">
          <img src="../Guest/images/<?php echo $se_pro['picture']; ?>"  width="400" height="400">
            <div class="link_box">
              <h5>
              <?php echo $se_pro['Tensp'] ?>
              </h5>
              <a href="ttsp.php?id=<?php echo $se_pro['id_SP'] ?>">
                Mua ngay
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  </body>
  <!-- footer section -->

  