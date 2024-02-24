<?php
require_once "../page/head.php";
?>

<div class="wrapperr">

  <div class="dropdownn animated fadeInDownBig">
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
      <i class="fa fa-times"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" style="position: relative; margin-right: 10px;">
      <li><a class="dropdown-item active" href="<?=$BASEURL?>index.php">Keluar </a></li>
    </ul>
  </div>
  <!-- Start Login 
    ============================================= -->
  <div class="login-area">
    <div class="container">
      <div class="row animated fadeInDownBig" style="margin-top: 20%;">
        <div class="col-md-12 text-center">
          <form action="javascript:void" id="register-form" class="white-popup-block">
            <div class="col-md-12 login-custom">
              <h3>Masukkan NIS Siswa</h3>
              <div class="col-md-12">
                <div class="row">
                  <div class="form-group">
                    <input class="form-control" placeholder="Masukkan NIS" type="text">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <button data-toggle="modal" data-target="#exampleModal" type="submit" value="Submit">
                    MASUK
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
  <!-- End Login Area -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
          <i class="fa fa-check-circle" style="color: #10c45c;"></i>
        </div>
        <div class="modal-body text-center">
          NIS Ditemukan , Login anda berhasil <br> Selamat datang, Wali Murid
        </div>
        <div class="modal-footer">
          <a href="hak-akses-ortu.php"><button type="button" class="btn btn-primary">Lanjut</button></a>
        </div>
      </div>
    </div>
  </div>

<?php
require_once "../page/script.php";
?>