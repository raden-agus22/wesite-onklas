<body>

<!-- Header 
    ============================================= -->
<header id="home">
  <!-- Start Navigation -->
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <!-- Start Top Search -->
    <div class="container">
      <div class="row">
        <div class="top-search">
          <div class="input-group">
            <form action="#">
              <input type="text" name="text" class="form-control" placeholder="Search">
              <button type="submit">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Search -->

    <div class="container-fluid">
      <div class="row">
        <!-- <div class="attr-nav">
      <ul>
        <li class="search"><a href="javasript:void"><i class="fa fa-search"></i></a></li>
      </ul>
    </div> -->
        <!-- Start Header Navigation -->
        <div class="col-lg-3">
          <div class="navbar-navbar">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
            </button>
          </div>
          <div style="margin: 15px 0px 15px 0px;" class="navbar-header">
            <img src="<?=$BASEURL?>assets/img/onklas.png" class="logo" alt="Logo" style="width: 60px;">
            <span>ONKLAS PRIMA INDONESIA</span>
          </div>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-lg-9">
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
              <li class="dropdown">
                <a href="<?=$BASEURL?>index.php">BERANDA</a>
              </li>
              <li class="dropdown">
                <a href="javasript:void" class="dropdown-toggle active" data-toggle="dropdown">PROFIL</a>
                <ul class="dropdown-menu">
                  <li><a href="<?=$BASEURL?>profile/sambutan.php">Sambutan Kepala Sekolah</a></li>
                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="javasript:void" id="blogDropdown1" role="button"
                      data-bs-toggle="dropdown">
                      Struktur Manajemen
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="blogDropdown1">
                      <li><a class="dropdown-item" href="<?=$BASEURL?>profile/pimpinan.php">Pimpinan</a></li>
                      <li><a class="dropdown-item" href="<?=$BASEURL?>profile/guru.php">Tenaga Pendidik</a></li>
                      <li><a class="dropdown-item" href="<?=$BASEURL?>profile/staff.php">Staff</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="<?=$BASEURL?>jurusan.php">JURUSAN</a>
              </li>
              <li class="dropdown">
                <a href="javasript:void" class="dropdown-toggle active" data-toggle="dropdown">INFORMASI</a>
                <ul class="dropdown-menu">
                  <li><a href="<?=$BASEURL?>informasi/pengumuman.php">Pengumuman</a></li>
                  <li><a href="<?=$BASEURL?>informasi/berita.php">Berita</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="<?=$BASEURL?>ekstra.php">EKSTRAKURIKULER</a>
              </li>
              <li class="dropdown">
                <a href="javasript:void" class="dropdown-toggle" data-toggle="dropdown">BIRO & LEMBAGA</a>
                <ul class="dropdown-menu">
                  <li><a href="<?=$BASEURL?>biro-lembaga/manajemen-mutu.php">Manajemen Mutu</a></li>
                  <li><a href="<?=$BASEURL?>biro-lembaga/bkk.php">BKK</a></li>
                  <li><a href="<?=$BASEURL?>biro-lembaga/lsp.php">LSP</a></li>
                </ul>
              </li>
              <li>
                <a href="<?=$BASEURL?>login-ppdb.php">PPBD</a>
              </li>
              <li>
                <a href="<?=$BASEURL?>kontak.php">KONTAK</a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </div>
    </div>

  </nav>
  <!-- End Navigation -->

</header>
<!-- End Header -->


<?php
  require_once "script.php"
?>