<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Konsentrasi Keahlian</title>

  <style>
    body {
      background: url('image/wp.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
    }

    h3,
    h4,
    p {
      color: #fff;
    }

    .card {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
    }

    .card img {
      border-radius: 15px;
      margin-bottom: 15px;
    }

    .card-body h4 {
      font-size: 1.2rem;
      font-weight: bold;
    }

    .card-body p {
      font-size: 0.95rem;
      color: #e0e0e0;
    }

    section {
      padding: 60px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .section-title h3 {
      font-size: 2rem;
      font-weight: bold;
    }

    @media (max-width: 767px) {
      .card {
        margin: 1rem auto;
      }
    }
  </style>

<body>
  <!-- SECTION JURUSAN -->
  <section>
    <div class="container px-5 mt-3">
      <div class="section-title">
        <h3>Konsentrasi</h3>
        <h3 class="text-primary">Keahlian</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
              <img src="image/tkj.jpg" alt="" width="150" height="150">
              <div class="card-body  border-0 text-center">
                <h4 class="text-center">TKJ</h4>
                <p>Teknik jaringan komputer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow rounded m-3 p-4 d-flex align-items-center h-95">
              <img src="image/rpl.jpg" alt="" width="150" height="150">
              <div class="card-body border-0 text-center">
                <h4>PPLG</h4>
                <p>Pengembangan Perangkat Lunak dan Gim</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
              <img src="image/tsm.jpg" alt="" width="150" height="150">
              <div class="card-body border-0 text-center">
                <h4>TSM</h4>
                <p>Teknik Sepeda Motor</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-4">
            <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
              <img src="image/dkv.jpg" alt="" width="150" height="150">
              <div class="card-body  border-0 text-center">
                <h4>DKV</h4>
                <p>Desain Komunikasi Visual</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
              <img src="image/toi.jpg" alt="" width="150" height="150">
              <div class="card-body text-center border-0 text-center">
                <h4>TOI</h4>
                <p>Teknik Otomasi Industri</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <!-- TUTUP SECTION JURUSAN -->
</body>
</html>
