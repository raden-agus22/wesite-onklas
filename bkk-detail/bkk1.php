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
        <h1>BKK Detail</h1>
        <ul class="breadcrumb">
          <li><a href="<?=$BASEURL?>index.php"><i class="fas fa-home"></i> Beranda</a></li>
          <li><a href="<?=$BASEURL?>biro-lembaga/bkk.php">BKK</a></li>
          <li class="active">BKK Detail</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Advisor Details 
    ============================================= -->
<div class="adviros-details-area default-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-5 thumb">
        <img style="object-fit: cover; width: 100%; height: 260px;" src="<?=$BASEURL?>assets/img/800x600.png" alt="Thumb">
        <div class="desc">
          <h4>Dr. Bubly Minu Monayem Pruda</h4>
          <span>REKAYASA PERANGKAT LUNAK</span>
          <ul>
            <li>
              <a href="javascript:void"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="javascript:void"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="javascript:void"><i class="fab fa-blogger-b"></i></a>
            </li>
            <li>
              <a href="javascript:void"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-7 info main-content">
        <!-- Star Tab Info -->
        <div class="tab-info">
          <!-- Start Tab Content -->
          <div class="tab-content tab-content-info">
            <!-- Single Tab -->
            <div id="tab1" class="tab-pane fade active in">
              <div class="info title">
                <ul>
                  <li>
                    Nama<span>Dr. Bubly Minu Monayem Pruda</span>
                  </li>
                  <li>
                    Jenis Kelamin<span>LAKI LAKI</span>
                  </li>
                  <li>
                    TLL<span>CALIFORNIA, TX 70240</span>
                  </li>
                  <li>
                    Alamat <span>CALIFORNIA, TX 70240</span>
                  </li>
                  <li>
                    Telepon<span>08297391922</span>
                  </li>
                  <li>
                    Jurusan<span>REKAYASA PERANGKAT LUNAK</span>
                  </li>
                  <li>
                    Angkatan<span>2022</span>
                  </li>
                  <li>
                    Tahun lulus<span>2022</span>
                  </li>
                  <li>
                    Melanjutkan sekolah di<span>-</span>
                  </li>
                  <li>
                    Jenjang<span>-</span>
                  </li>
                  <li>
                    Progam studi<span>-</span>
                  </li>
                  <li>
                    Pekerjaan<span>-</span>
                  </li>
                  <li>
                    Bekerja di Perusahaan<span>-</span>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Single Tab -->
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Tab Info -->
        <a href="javascript:void">
          <button class="button" >Pilih</button>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End Advisor Details -->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
      <!-- heading modal -->
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ISI IDENTITAS</h4>
      </div>
      <!-- body modal -->
      <div class="modal-body">
        <form action="" class="white-popup-block" style="width: 100%;">
          <div class="col-md-12 login-custom">
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" placeholder="Nama Perusahaan" type="text" required>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" placeholder="Alamat" type="text" required>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" placeholder="PIC" type="text" required>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" placeholder="No.Telepon" type="text" required>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <button type="submit">
                  KIRIM
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
require_once "../page/footer.php";
require_once "../page/script.php";

?>