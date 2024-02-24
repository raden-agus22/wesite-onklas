<?php
require_once "../page/head.php";
require_once "../page/navbar.php"
  ?>

<div class="breadcrumb-area shadow dark text-center bg-fixed text-light"
  style="background-image: url(../assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>BKK BURSA MAGANG</h1>
        <ul class="breadcrumb">
          <li><a href="<?=$BASEURL?>index.php"><i class="fas fa-home"></i> Beranda</a></li>
          <li class="active">Biro & Lembaga</li>
          <li class="active"><a href="<?=$BASEURL?>biro-lembaga/bkk.php">BKK</a></li>
          <li class="active">Bursa Magang</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 100px;">
  <div class="row">
    <div class="col-md-4">
      <a href="javascript:void">
        <button class="button">BURSA MAGANG</button>
      </a>
    </div>
    <div class="col-md-7">
      <select class="form-select" aria-label="Default select example">
        <option selected>Pilih kompetensi keahlian</option>
        <option value="1">Bahasa</option>
        <option value="2">IPA</option>
        <option value="3">IPS</option>
        <option value="3">Informatika</option>
      </select>
    </div>
    <div class="col-md-1">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-shopping-cart"><span>3</span></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li class="dropdown-item" style="padding: 20px;">
            <div class="row" style="display: flex;">
              <div class="col-md-3">
                <img src="<?=$BASEURL?>assets/img/5.jpg" width="50" alt="">
              </div>
              <div class="col-md-7 userr">
                <span>Dr. Bubly Minu Monayem Pruda</span><br>
                <span>ANGKATAN 2022</span>
              </div>
              <div class="col-md-2">
                <button><i class="fa fa-trash-alt"></i></button>
              </div>
            </div>
          </li>
          <hr>
          <li class="dropdown-item" style="padding: 20px;">
            <div class="row" style="display: flex;">
              <div class="col-md-3">
                <img src="<?=$BASEURL?>assets/img/5.jpg" width="50" alt="">
              </div>
              <div class="col-md-7 userr">
                <span>Dr. Bubly Minu Monayem Pruda</span><br>
                <span>ANGKATAN 2022</span>
              </div>
              <div class="col-md-2">
                <button>
                  <i class="fa fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </li>
          <hr>
          <li class="dropdown-item" style="padding: 20px;">
            <div class="row" style="display: flex;">
              <div class="col-md-3">
                <img src="<?=$BASEURL?>assets/img/5.jpg" width="50" alt="">
              </div>
              <div class="col-md-7 userr">
                <span>Dr. Bubly Minu Monayem Pruda</span><br>
                <span>ANGKATAN 2022</span>
              </div>
              <div class="col-md-2">
                <button><i class="fa fa-trash-alt"></i></button>
              </div>
            </div>
          </li>
          <hr>
          <li>
            <button class="buttton" type="submit" data-toggle="modal" data-target="#myModal">
              PROSES
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section id="advisor" class="advisor-area bottom-less">
  <div class="container">
    <div class="row">
      <div class="advisor-items text-center text-light">
        <!-- Single Item -->
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Item -->
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 single-item">
          <div class="advisor-item">
            <div class="info-box">
              <img style="object-fit: cover; width: 100%; height: 240px;" src="<?=$BASEURL?>assets/img/800x800.png" alt="Thumb">
              <div class="info-title">
                <h4>Dr. Bubly Minu Monayem Pruda</h4>
                <span>ANGKATAN / <span>2022</span></span>
              </div>
              <div class="col-md-6 small">
                <a href="<?=$BASEURL?>bkk-detail/bkk1.php">
                  <button class="button">Detail</button>
                </a>
              </div>
              <div class="col-md-6 small">
                <a href="javascript:void">
                  <button class="button">Pilih</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Modal -->
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