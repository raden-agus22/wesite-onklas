<?php
require_once "../page/head.php";
// require_once "../page/navbar.php"
?>
<!-- Header 
    ============================================= -->
<header id="home">

  <!-- Start Navigation -->
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
      </button>
      <img src="<?=$BASEURL?>assets/img/onklas.png" style="object-fit: cover; width: 50px; height: 50px;" class="logo" alt="Logo">
      <span>ONKLAS PRIMA INDONESIA</span>
    </div>
    <!-- End Header Navigation -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar" data-in="#" data-out="#" style="float: right; margin-right: 10px;">
        <div class="attr-nav">
          <ul>
            <li class=""><a href="#"> Selamat datang, Wali Murid</a></li>
            <li class="side-menu icon"><a href="javascript:void"><img src="<?=$BASEURL?>assets/img/5.jpg" alt="">
            <i class="fa fa-caret-down"></i></a></li>
          </ul>
        </div>
      </ul>
    </div>
    </div>
    </div>
    <!-- Start Side Menu -->
    <div class="side">
      <a href="#" class="close-side"><i class="fa fa-times"></i></a>
      <div class="widget">
        <!-- <h4 class="title">PROFILE</h4> -->
        <ul>
          <li><a href="javascript:void"><i class="fa fa-user"></i> Profile</a></li>
          <li><a href="javascript:void" data-toggle="modal" data-target="#exampleModal1"><i
                class="fa fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    <!-- End Side Menu -->
  </nav>
  <!-- End Navigation -->

</header>
<!-- End Header -->


<!-- <div class="container" style="margin-top: 100px; margin-bottom: 50px;"> -->
<nav class="navbarr">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hak Akses Orang Tua</a>
  </div>
</nav>

<div class="row">
  <div class="col-md-3">
    <a href="#pengumuman" data-toggle="tab">
      <div class="card">
        <i class="fa fa-bell"></i>
        Pengumuman
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="">
      <div class="card">
        <i class="fa fa-copy"></i>
        Tugas
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="">
      <div class="card">
        <i class="fa fa-clock"></i>
        Jadwal ujian
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="">
      <div class="card">
        <i class="fa fa-coins"></i>
        Poin siswa
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="">
      <div class="card">
        <i class="fa fa-chalkboard"></i>
        Presensi sekolah
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="">
      <div class="card">
        <i class="fa fa-paste"></i>
        Presensi kelas / jurnal kbm
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="">
      <div class="card">
        <i class="fa fa-money-check-alt"></i>
        Tagihan uang sekolah
      </div>
    </a>
  </div>
</div>


<div class="cardd">
  <div class="tab-content">
    <!-- ALUR PENDAFTARAN -->
    <div id="pengumuman" class="tab-pane fade">      
      
    </div>
</div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        <i class="fa fa-question-circle" style="color: red;"></i>
      </div>
      <div class="modal-body text-center">
        Apakah anda yakin ingin keluar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-target="#exampleModal2"
          data-toggle="modal">Iya</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        <i class="fa fa-check-circle" style="color: #10c45c;"></i>
      </div>
      <div class="modal-body text-center">
        Anda berhasil keluar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"><a href="<?=$BASEURL?>index.php">Close</a></button>
      </div>
    </div>
  </div>
</div>


<?php
require_once "../page/script.php";

?>