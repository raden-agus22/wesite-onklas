<?php
require_once "page/head.php";

require_once "page/navbar.php";
?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
  style="background-image: url(assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Jelajah Sekolah</h1>
        <ul class="breadcrumb">
          <li><a href="index.php"><i class="fas fa-home"></i> Beranda</a></li>
          <li class="active">Gallery</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Portfolio
    ============================================= -->
<div id="portfolio" class="portfolio-area default-padding">
  <div class="container">
    <div class="portfolio-items-area text-center">
      <div class="row">
        <div class="col-md-12 portfolio-content">
          <div class="mix-item-menu active-theme">
            <button class="active" data-filter="*">Semua</button>
            <button data-filter=".campus">Kelas</button>
            <button data-filter=".teachers">Kantin</button>
            <button data-filter=".education">Aula</button>
            <button data-filter=".ceremony">Kelas Praktek</button>
            <button data-filter=".students">Laboratorium</button>
            <button data-filter=".students">Sanitasi Sekolah</button>
          </div>
          <!-- End Mixitup Nav-->

          <div class="row magnific-mix-gallery masonary text-light">
            <div id="portfolio-grid" class="portfolio-items col-4">
              <div class="pf-item ceremony students">
                <div class="item-effect">
                  <img class="image" src="assets/img/1500x700.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/1500x700.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                    <div class="live-view">
                      <div class="video-play-btn" style="margin-top: 10px;">
                        <a class="popup-youtube" href="assets/img/video/y2meta.cyou - VIDEO PROFIL SEKOLAH .mp4"><i
                            class="fas fa-play-circle"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="pf-item teachers ceremony">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png"
                    alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                    </a>
                  </div>
                </div>
              </div>
              <div class="pf-item campus education">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                  </div>
                </div>
              </div>
              <div class="pf-item education students">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                  </div>
                </div>
              </div>
              <div class="pf-item campus">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                  </div>
                </div>
              </div>
              <div class="pf-item ceremony teachres">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                  </div>
                </div>
              </div>
              <div class="pf-item teachres">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                  </div>
                </div>
              </div>
              <div class="pf-item ceremony students">
                <div class="item-effect">
                  <img class="image" src="assets/img/800x800.png" alt="thumb" />
                  <div class="overlay">
                    <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-expand"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Portfolio -->

<?php
require_once "page/footer.php";
require_once "page/script.php";
  ?>