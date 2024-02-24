<?php
require_once "../page/head.php";

require_once "../page/navbar.php"
  ?>

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
  style="background-image: url(../assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Sambutan</h1>
        <ul class="breadcrumb">
          <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
          <li class="active">Sambutan</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Start About 
    ============================================= -->
<div class="about-area default-padding">
  <div class="container">
    <div class="row">
      <div class="about-info">
        <div class="col-md-6 thumb">
          <img src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
        </div>
        <div class="col-md-6 info">
          <h2>Sambutan Kepala Sekolah</h5>
            <h5><i class="fa fa-user"></i> Totok Warsito S.Pd</h5>
            <p>
              " Kami menyadari, tidak mudah menciptakan suatu produk unggulan di lingkungan kota besar & kota industri
              seperti Surabaya, namun demikian kami tetap berupaya membekali siswa dengan program-program unggulan untuk
              menyiapkan mereka dalam menatap masa depan. <br> PKLK BISA … MANDIRI … TANPA DISKRIMINASI … "
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End About -->

<?php
require_once "../page/footer.php";
require_once "../page/script.php";

?>