<?php
require_once "page/head.php";

require_once "page/navbar.php"
  ?>

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
  style="background-image: url(../assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Jurusan</h1>
        <ul class="breadcrumb">
          <li><a href="index.php"><i class="fas fa-home"></i> Beranda</a></li>
          <li class="active">Jurusan</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Start Top Category & Trending Courses 
    ============================================= -->
<div class="top-cat-area inc-trending-courses about-area default-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8 top-cat-items text-light inc-bg-color text-center">
        <div class="row">
          <div class="col-md-6 col-sm-6 equal-height">
            <div class="item blue" style="background-image: url(assets/img/800x600.png);">
              <a href="jurusan-detail/jurusan1.php">
                <!-- <i class="flaticon-feature"></i> -->
                <div class="info">
                  <h4>Bahasa</h4>
                  <!-- <span>(1,226) Topics</span> -->
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 equal-height">
            <div class="item blue" style="background-image: url(assets/img/800x600.png);">
              <a href="jurusan-detail/jurusan1.php">
                <div class="info">
                  <h4>IPS</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 equal-height">
            <div class="item blue" style="background-image: url(assets/img/800x600.png);">
              <a href="jurusan-detail/jurusan1.php">
                <div class="info">
                  <h4>IPA</h4>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 equal-height">
            <div class="item blue" style="background-image: url(assets/img/800x600.png);">
              <a href="jurusan-detail/jurusan1.php">
                <div class="info">
                  <h4>Informatika</h4>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Top Category -->

      <!-- End Home Sidebar -->
      <div class="col-md-4 home-sidebar">
        <!-- Start Trending Courses -->
        <div class="sidebar-item trending-courses-box">
          <h4>Informasi Kontak</h4>
          <div class="trending-courses-items">
            <div class="item">
              <div class="content">
                <div class="info">
                  <p>ONKLAS PRIMA INDONESIA</p><br>
                  <p>
                    Semolowaru Elok Blok AB/ 26
                    Sukolilo,Surabaya. Jawa Timur
                  </p><br>
                  <p>
                    0822311712123 <br>
                    sekolah@onklas.id
                  </p><br>
                  <p>
                    Senin – Jumat 8:00 Pagi – 5:00 Sore</p>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Trending Courses -->
      </div>
      <!-- End Home Sidebar -->

    </div>
  </div>
</div>
<!-- End Top Categories & Trending Courses -->

<?php
require_once "page/footer.php";
require_once "page/script.php";

?>