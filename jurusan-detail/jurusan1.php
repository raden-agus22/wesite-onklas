<?php
require_once "../page/head.php";

require_once "../page/navbar.php"
  ?>

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
  style="background-image: url(../assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Bahasa</h1>
        <ul class="breadcrumb">
          <li><a href="<?=$BASEURL?>index.php"><i class="fas fa-home"></i> Beranda</a></li>
          <li><a href="<?=$BASEURL?>jurusan.php"> Jurusan</a></li>
          <li class="active">Jurusan-Detail</li>
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
      <div class="col-md-8">
        <img src="<?=$BASEURL?>assets/img/500x700.png" style="object-fit: cover; width: 100%; height: 260px;" alt="">
        <h3 style="margin-top: 20px;">Bahasa</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse illum enim animi totam dicta, architecto
          doloremque distinctio explicabo consequatur commodi quos quasi placeat odit quaerat quidem. Nisi explicabo
          incidunt illum?</p>
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
                  <h4>Pembina</h4>
                  <p>Totok Warsito S.Pd</p>
                  <p>Semolowaru Elok Blok AB/ 26
                    Sukolilo,Surabaya. Jawa Timur</p>
                  <p>+62 8589302903</p>
                  <p>sekolah@onklas.id</p>
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
require_once "../page/footer.php";
require_once "../page/script.php";

?>