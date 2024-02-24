<?php
require_once "../page/head.php";
// require_once "page/navbar.php";
?>

<header id="home">

  <!-- Start Navigation -->
  <nav class="navbar navbar-default  navbar-sticky bootsnav">
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
          <li><a href="javascript:void" data-toggle="modal" data-target="#modal-keluar"><i
                class="fa fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    <!-- End Side Menu -->
  </nav>
  <!-- End Navigation -->

</header>
<!-- End Header -->

<nav class="navbarr">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PENERIMAAN PESERTA DIDIK BARU</a>
  </div>
</nav>

<div class="row">
  <div class="col-md-2">
    <a href="#alur" data-toggle="tab">
      <div class="card">
        <i class="fa fa-list"></i>
        <span>ALUR PENDAFTARAN</span>
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="#syarat" data-toggle="tab">
      <div class="card">
        <i class="fa fa-copy"></i>
        <span>SYARAT PENDAFTARAN</span>
      </div>
    </a>
  </div>
  <div class="col-md-3">
    <a href="#formulir" data-toggle="tab">
      <div class="card">
        <i class="fa fa-pen"></i>
        <span>FORMULIR PENDAFTARAN</span>
      </div>
    </a>
  </div>
  <div class="col-md-2">
    <a href="#kontak" data-toggle="tab">
      <div class="card">
        <i class="fa fa-phone"></i>
        <span>HUBUNGI KAMI</span>
      </div>
    </a>
  </div>
  <div class="col-md-2">
    <a href="#pengumuman" data-toggle="tab">
      <div class="card">
        <i class="fa fa-bell"></i>
        <span>PENGUMUMAN</span>
      </div>
    </a>
  </div>
</div>


<!-- <div class="container"> -->
<div class="cardd">
  <div class="tab-content">
    <!-- ALUR PENDAFTARAN -->
    <div id="alur" class="tab-pane ">     
      <h3>Alur Pendaftaran</h3>
      <h4>1. Calon Peserta Didik Baru mengisi Formulir Pendaftaran via Online.</h4>
      <p>a. Mengisi formulir yang telah disediakan</p>
      <p>b. Kolom yang berbintang (*) wajib diisi, jika belum ada data, isi dengan paduan 3 digit angka (008/808/977)
      </p>
      <p>c. Setelah kolom formulir terisi tekan tombol daftar, maka akan muncul KODE PENDAFTARAN</p>
      <p>d. Silahkan simpan Kode Pendaftaran untuk ditunjukkan pada saat penyerahan berkas pendaftaran</p>
      <p>e. Calon siswa baru membayar biaya pendaftaran sebesar Rp. 100.000,00 melalui transfer BRI No. 002301001299305
        a.n. SMK TI ANNAJIYAH BAHRUL ULUM</p>
      <p>f. Calon siswa baru melakukan konfirmasi pembayaran melalui SMS/telepon/WA ke nomor 085-707-987-987 dengan
        menyebutkan nama calon siswa dan bukti transfer.</p>
      <h4>2. Daftar Ulang</h4>
      <p>a. Melakukan verifikasi dengan menyerahkan berkas pendaftaran yang telah ditentukan (offline/online)</p>
      <p>b. Melakukan pembayaran administrasi Daftar Ulang bisa dilakukan melalui transfer ke rekening sekolah: BRI No.
        002301001299305 a.n. SMK TI ANNAJIYAH BAHRUL ULUM</p>
      <p>c. Konfirmasi transfer pembayaran melalui SMS/telepon/WA ke nomor 085-707-987-987 dengan menyebutkan nama calon
        siswa dan bukti transfer.</p>
    </div>

    <!-- SYARAT PENDAFTARAN -->
    <div id="syarat" class="tab-pane fade" style="margin-bottom: 50px;">
      <h3>Berkas Pendaftaran</h3>
      <h4>1. Formulir atau Kode Pendaftaran dari Pengisian Formulir Online</h4>
      <h4>2. Foto cetak berwama ukuran 3x4 jumlah 4 lembar</h4>
      <h4>3. Foto copy KK dan KTP orang tua/wali 2 lembar</h4>
      <h4>4. Foto copy NISN 2 lembar</h4>
      <h4>5. Surat keterangan kelas akhir (pengganti foto copy ljazah/STTB/SKHUN)</h4>
      <h4>6. Foto copy Akta Kelahiran 2 lembar</h4>
      <h4>7. Membayar biaya administrasi pendaftaran</h4>
    </div>

    <!-- PENDAFTARANNNNN -->
    <div id="formulir" class="tab-pane fade">
      <!-- <div class="container"> -->
      <ul class="nav nav-tabs">
        <!-- <li><a data-toggle="tab" href="#home">Home</a></li> -->
        <li class="active"><a data-toggle="tab" href="#siswa"><i class="fa fa-user"></i> Siswa</a></li>
        <li><a data-toggle="tab" href="#orang-tua"><i class="fa fa-users"></i> Orang Tua</a></li>
        <li><a data-toggle="tab" href="#sekolah"><i class="fa fa-university"></i> Sekolah</a></li>
      </ul>
      <form action="">
        <div class="tab-content" style="margin-bottom: 50px;">
          <div id="siswa" class="tab-pane fade in active">
            <div class="row">
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">NISN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="NOMOR NISN">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">NIK SISWA</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="NIK SISWA">
              </div>
              <div class="col-md-12 mb">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="NAMA LENGKAP">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="TEMPAT LAHIR">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="name@example.com">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>JENIS KELAMIN</option>
                  <option value="1">Laki-Laki</option>
                  <option value="2">Perempuan</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Agama</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH AGAMA</option>
                  <option value="1">Islam</option>
                  <option value="2">Kristen</option>
                  <option value="3">Hindhu</option>
                  <option value="4">Budha</option>
                  <option value="5">Konghucu</option>
                </select>
              </div>
              <div class="col-md-12 mb">
                <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH JURUSAN</option>
                  <option value="1">Bahasa</option>
                  <option value="2">IPS</option>
                  <option value="3">IPA</option>
                  <option value="4">Informatika</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN PROVINSI">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Kabupaten</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN KABUPATEN">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN KECAMATAN">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN KELURAHAN">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Dusun</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN DUSUN">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">RT/RW</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN RT/RW">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN KODE POS">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Telp. Siswa</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                  autoComplete="off" required placeholder="MASUKKAN NO. TELEPON">
              </div>
            </div>
            <button class="btn btn-succes" style="margin-top: 15px;"><a data-toggle="tab" href="#orang-tua">Next<i
                  class="fa fa-arrow-right"></i></a></button>
          </div>

          <div id="orang-tua" class="tab-pane fade in">
            <div class="row" style="margin-top: 10px;">
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN NAMA AYAH">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN NAMA IBU">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ayah</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH PEKERJAAN</option>
                  <option value="1">Tidak Bekerja</option>
                  <option value="2">Nelayan</option>
                  <option value="3">Petani</option>
                  <option value="4">Peternak</option>
                  <option value="5">PNS/TNI/POLRI</option>
                  <option value="6">Karyawan Swasta</option>
                  <option value="7">Pedagang</option>
                  <option value="8">Wiraswasta</option>
                  <option value="9">Wirausaha</option>
                  <option value="10">Buruh</option>
                  <option value="11">Tenaga Kerja Indonesia</option>
                  <option value="12">Sudah meninggal</option>
                  <option value="13">Lainnya</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Pekerjaan Ibu</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH PEKERJAAN</option>
                  <option value="1">Tidak Bekerja</option>
                  <option value="2">Nelayan</option>
                  <option value="3">Petani</option>
                  <option value="4">Peternak</option>
                  <option value="5">PNS/TNI/POLRI</option>
                  <option value="6">Karyawan Swasta</option>
                  <option value="7">Pedagang</option>
                  <option value="8">Wiraswasta</option>
                  <option value="9">Wirausaha</option>
                  <option value="10">Buruh</option>
                  <option value="11">Tenaga Kerja Indonesia</option>
                  <option value="12">Sudah meninggal</option>
                  <option value="13">Lainnya</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Penghasilan Ayah Per-bulan</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH PENGHASILAN</option>
                  <option value="1">Kurang dari Rp. 500.000</option>
                  <option value="2">Rp. 500.000 - Rp. 599.999</option>
                  <option value="3">Rp. 1.000.000 - Rp. 1.999.999</option>
                  <option value="4">Rp. 2.000.000 - Rp. 4.999.999</option>
                  <option value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                  <option value="6">Lebih dari Rp. 20.000.000</option>
                  <option value="7">Tidak Berpenghasilan</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Penghasilan Ibu Per-bulan</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH PENGHASILAN</option>
                  <option value="1">Kurang dari Rp. 500.000</option>
                  <option value="2">Rp. 500.000 - Rp. 599.999</option>
                  <option value="3">Rp. 1.000.000 - Rp. 1.999.999</option>
                  <option value="4">Rp. 2.000.000 - Rp. 4.999.999</option>
                  <option value="5">Rp. 5.000.000 - Rp. 20.000.000</option>
                  <option value="6">Lebih dari Rp. 20.000.000</option>
                  <option value="7">Tidak Berpenghasilan</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Pendidikan Ayah</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH PENDIDIKAN</option>
                  <option value="1">SMA</option>
                  <option value="2">SMK</option>
                  <option value="3">S-1</option>
                  <option value="4">S-2</option>
                  <option value="5">S-3</option>
                  <option value="6">D-1</option>
                  <option value="7">D-2</option>
                  <option value="8">D-3</option>
                  <option value="9">D-4</option>
                  <option value="10">Lainnya</option>
                </select>
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Pendidikan Ibu</label>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option selected>PILIH PENDIDIKAN</option>
                  <option value="1">SMA</option>
                  <option value="2">SMK</option>
                  <option value="3">S-1</option>
                  <option value="4">S-2</option>
                  <option value="5">S-3</option>
                  <option value="6">D-1</option>
                  <option value="7">D-2</option>
                  <option value="8">D-3</option>
                  <option value="9">D-4</option>
                  <option value="10">Lainnya</option>
                </select>
              </div>
            </div>
            <button class="btn btn-succes" style="margin-top: 15px;"><a data-toggle="tab" href="#siswa"><i
                  class="fa fa-arrow-left"></i> Prev</a></button>
            <button class="btn btn-succes" style="margin-top: 15px;"><a data-toggle="tab" href="#sekolah">Next<i
                  class="fa fa-arrow-right"></i></a></button>
          </div>


          <div id="sekolah" class="tab-pane fade in">
            <div class="row" style="margin-top: 10px;">
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                  autoComplete="off" required placeholder="MASUKKAN ASAL SEKOLAH">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Nomor Ijazah</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                  autoComplete="off" required placeholder="MASUKKAN NOMOR IJAZAH">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Nomor SKHUN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                  autoComplete="off" required placeholder="MASUKKAN NOMOR SKHUN">
              </div>
              <div class="col-md-6 mb">
                <label for="exampleFormControlInput1" class="form-label">Nomor UN</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" autoComplete="off" required placeholder="MASUKKAN NOMOR UN">
              </div>
            </div>
            <button class="btn btn-succes" style="margin-top: 15px;"><a data-toggle="tab" href="#orang-tua"><i
                  class="fa fa-arrow-left"></i> Prev</a></button>
            <button type="submit" class="btn btn-succes" style="margin-top: 15px;"><i class="fa fa-save"></i>
              <a href="" data-toggle="modal" data-target="#exampleModal11"> Daftar Sekarang</a></button>
          </div>
        </div>
      </form>
    </div>

    <div id="kontak" class="tab-pane fade" style=" margin-bottom: 50px;">
      <h3>Hubungi lewat email kami</h3>
      <h4><a href="mailto:sekolah@onklas.id">sekolah@onklas.id</a></h4><br>
      <h3>Call center</h3>
      <h4><a href="whatsapp://send?text=Hello&phone=0822311712123">0822311712123 / Klik untuk menghubungi</a></h4>
      <h3>Panitia PPDB</h3>
      <h4><a href="whatsapp://send?text=Hello&phone=0822311712123">0822311712123 / Klik untuk menghubungi</a></h4>
    </div>

    <div id="pengumuman" class="tab-pane fade" style=" margin-bottom: 50px;">
      <h4>BELUM ADA PENGUMUMAN</h4>
    </div>

  </div>
</div>
<!-- </div> -->
</div>

<div class="modal fade" id="modal-keluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-target="#berhasil-keluar"
          data-toggle="modal">Iya</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="berhasil-keluar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="button" class="btn btn-secondary"><a href="ppdb.php">Close</a></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        <i class="fa fa-question-circle" style="color: red;"></i>
      </div>
      <div class="modal-body text-center">
        Apakah anda yakin data anda sudah benar?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
        Data terkirim
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary"><a href="ppdb-user.php">Close</a></button>
      </div>
    </div>
  </div>
</div>

<?php
// require_once "page/footer.php";
require_once "../page/script.php";
?>