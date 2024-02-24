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
        <h1>Kontak Kami</h1>
        <ul class="breadcrumb">
          <li><a href="index.php"><i class="fas fa-home"></i> Beranda</a></li>
          <!-- <li><a href="javasript:void"></a></li> -->
          <li class="active">Kontak</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Info
    ============================================= -->
<div class="contact-info-area default-padding">
  <div class="container">
    <div class="row">
      <!-- Start Contact Info -->
      <div class="contact-info">
        <div class="col-md-4">
          <div class="item">
            <div class="icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="info">
              <h4>Telepon</h4>
              <span>0822311712123</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info">
              <h4>Alamat</h4>
              <span>Jl. Nginden Semolo No.45, Menur Pumpungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info">
              <h4>Email</h4>
              <span>sekolah@onklas.id</span>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Info -->

      <div class="seperator col-md-12">
        <span class="border"></span>
      </div>

      <!-- Start Maps & Contact Form -->
      <div class="maps-form">
        <div class="col-md-6 maps">
          <h3>Lokasi kami</h3>
          <div class="google-maps">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7745.338735271946!2d112.75222516912763!3d-7.298716222778151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8a788b3b7%3A0x62fd2426363014e5!2sUntag!5e0!3m2!1sid!2sid!4v1673659286016!5m2!1sid!2sid"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-md-6 form">
          <div class="heading">
            <h3>Kontak kami</h3>
          </div>
          <form action="assets/mail/contact.php" method="POST" class="contact-form">
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                  <span class="alert-error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                  <span class="alert-error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group">
                  <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                  <span class="alert-error"></span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="form-group comments">
                  <textarea class="form-control" id="comments" name="comments"
                    placeholder="Tell Me About Courses *"></textarea>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <button type="submit" name="submit" id="submit">
                  Send Message <i class="fa fa-paper-plane"></i>
                </button>
              </div>
            </div>
            <!-- Alert Message -->
            <div class="col-md-12 alert-notification">
              <div id="message" class="alert-msg"></div>
            </div>
          </form>
        </div>
      </div>
      <!-- End Maps & Contact Form -->

    </div>
  </div>
</div>
<!-- End Contact Info -->

<?php
require_once "page/footer.php";
require_once "page/script.php";

?>