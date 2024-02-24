<?php
require_once "page/head.php";
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
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center animated fadeInDownBig"  style="margin-top: 10%;">
          <form action="javascript:void" id="register-form" class="white-popup-block">
            <div class="col-md-12 login-custom">
              <!-- <h4>Login Now</h4> -->
              <div class="col-md-12 login-social" style="margin-top: 10px;">
                <h5>Login With</h5>
                <ul>
                  <a href="ppdb.php">
                    <li class="google">
                      <img src="/assets/img/google.png" alt="">
                    </li>
                  </a>
                </ul>
              </div>
          </form>
        </div>
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
        <a href="ppdb.php"><button type="button" class="btn btn-primary">Lanjut</button></a>
      </div>
    </div>
  </div>
</div>

<?php
require_once "page/script.php";
?>