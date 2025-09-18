<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vendor/bs/bs.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">\
  <title>SMKN 4 TASIKMALAYA</title>

</head>

<body>

  <?php include 'navbar.php'; ?>


  <!-- SECTION CAROUSEL -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="image/foto7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="image/foto7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/foto7.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- TUTUP COROUSEL -->


  <!-- SECTION STATISTIK -->

  <div class="row m-5">
    <div class="row text-center g-3">
      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body">
            <i class="bi bi-person-video3 display-4"></i>
            <h4 class="mt-3">100 orang</h4>
            <p>guru / pendidik</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body">
            <i class="bi bi-people-fill display-4"></i>
            <h4 class="mt-3">1500 orang</h4>
            <p>peserta didik</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body">
            <i class="bi bi-person-badge-fill display-4"></i>
            <h4 class="mt-3">10 orang</h4>
            <p>Staf TU</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white h-100" style="background-color: rgb(15, 102, 136);">
          <div class="card-body">
            <i class="bi bi-lightbulb-fill display-4"></i>
            <h4 class="mt-3">5 </h4>
            <p>pogram kealian</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TUTUP SECTION STATISTIK -->


  <!-- SECTION SAMBUTAN -->
  <div class="container my-5">
    <div class="row g-4 align-items-center ">

      <!-- FOTO KEPALA SEKOLAH-->
      <h3 class="fw-bold">Sambutan <br><span class="text-primary">Kepala Sekolah</span></h3>
      <div class="col-md-3 text-center">
        <div class="p-3 rounded shadow" style="background-color: rgb(15, 102, 136);" href="#">
          <img src="image/kepsek.jpg" alt="Kepala Sekolah" class="img-fluid rounded ">
        </div>
    </div>
     
    
      <!-- Teks SAMBUTAN -->
      <div class="col-md-8 mt-4 mt-md-0">
        <h4 class="fw-bold">Kurniawan S.Pd, M.Pd</h4>
        <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
        <p>
          Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya.
          Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini.
          Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh
          tentang sekolah kami sehingga dapat mempererat tali silaturahmi antara sekolah dengan masyarakat demi kemajuan kita bersama.
        </p>
        <p>
          Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki.
          Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.
        </p>
        <p>
          Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu
          persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.
        </p>
        <p>Wassalamu’alaikum Warahmatullahi Wabarakatuh</p>
      </div>

    </div>
  </div>
  <!-- TUTUP SAMBUTAN -->

  <!-- SECTION JURUSAN -->
  <?php include 'jurusan.php'; ?>
  <!-- TUTUP SECTION JURUSAN -->

  <!-- SECTION BERITA -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="mb-0">Berita</h3>
        <h3 class="text-primary">Terkini</h3>
        <p>Berita terbaru, cerita inspiratif dan informasi terkini seputar kegiatan serta prestasi sekolah kami.</p>
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <img src="image/foto1.jpg" alt="" width="385" height="200">
              </div>
              <div class="card-body">
                <h3>PELATIHAN SEFETY RIDING SMKN4 TASIKMALAYA</h3>
                <a class="btn btn- text-white" style="background-color: rgb(15, 102, 136);" href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-di-jawa-barat">Baca
                  selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <img src="image/foto2.jpg" alt="" width="385" height="200">
              </div>
              <div class="card-body">
                <h3>Koneksikan Iduka dengan Pencari Kerja</h3>
                <a class="btn btn- text-white" style="background-color: rgb(15, 102, 136);" href="https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/#google_vignette">Baca
                  selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                <img src="image/expo.jpg" alt="" width="385" height="200">
              </div>
              <div class="card-body">
                <h3> Expo Creanova SMKN 4 Tasikmalaya </h3>
                <a class="btn btn- text-white" style="background-color: rgb(15, 102, 136);" href="https://radartasik.id/2023/03/02/siswa-smkn-4-tasikmalaya-adu-inovasi-dan-kreativitas-di-expo-creanova/#google_vignette">Baca
                  selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- TUTUP SECTION BERITA -->

        <?php include 'footer.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
          crossorigin="anonymous"></script>
</body>

</html>