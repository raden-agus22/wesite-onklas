<?php
require_once "../page/head.php";

require_once "../page/navbar.php"
  ?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
  style="background-image: url(../assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Berita detail</h1>
        <ul class="breadcrumb">
          <li><a href="javasript:void"><i class="fas fa-home"></i> Beranda</a></li>
          <li><a href="<?=$BASEURL?>informasi/berita.php">Berita</a></li>
          <li class="active">Berita detail</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
<div class="blog-area full-blog standard full-blog default-padding">
  <div class="container">
    <div class="row">
      <div class="blog-items">
        <div class="blog-content col-md-10 col-md-offset-1">
          <!-- Single Item -->
          <div class="single-item">
            <div class="item">
              <div class="thumb">
                <a href="javasript:void"><img src="<?=$BASEURL?>assets/img/1500x700.png" alt="Thumb"></a>
                <div class="date">
                  <h4><span>24</span> Nov, 2018</h4>
                </div>
              </div>
              <div class="info">
                <h3>
                  <a href="javasript:void">SMALB-B KARYA MULYA SURABAYA siap sukseskan vokasi istimewa</a>
                </h3>
                <p>
                  Sitting mistake towards his few country ask. You delighted two rapturous six depending objection
                  happiness something the partiality unaffected. Lorem ipsum dolor sit amet consectetur adipisicing
                  elit. Cum quidem recusandae consequuntur ipsum dolores tempore corrupti fuga. Provident velit porro
                  necessitatibus! Inventore libero aliquid earum autem eaque eveniet cumque fugiat.
                </p>
                <div class="meta">
                  <ul>
                    <li>
                      <a href="javasript:void"><i class="fas fa-user"></i>Totok Warsito S.Pd</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Item -->

          <!-- End Blog Content -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->

  <?php
  require_once "../page/footer.php";
require_once "../page/script.php";

  ?>