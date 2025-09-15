<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vendor/bs/bs.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>SMKN 4 TASIKMALAYA</title>
</head>
<body>
  

<?php include 'navbar.php';?>

  <!-- SECTION GALERI -->
   <?php
    $galeri =[
      'image/hut1.jpg',
      'image/hut2.jpg',
      'image/hut3.jpg',
      'image/hut4.jpg',
      'image/hut5.jpg',
      'image/hut6.jpg'
    ];
    $i = 0;
   ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">PERINGATAN HUT RI KE-80</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
                  <div class="col-lg-4 mt-4">
                    <img src="<?=$galeri[$i]?>" class="img-fluid rounded">
                  </div>
                  <?php $i++; ?>
              <?php endwhile;?>
            </div>
          </div>
        </div>
      </div>
  </section>



  <!-- SECTION GALERI -->
   <?php
    $galeri =[
      'image/hut1.jpg',
      'image/hut2.jpg',
      'image/hut3.jpg',
      'image/hut4.jpg',
      'image/hut5.jpg',
      'image/hut6.jpg'
    ];
    $i = 0;
   ?>
  <section>
    <div class="container p-4 mt-5 my-5">
      <div class="row">
        <div class="card">
          <div class="col-lg-12">
            <h3 class="text-center">PERINGATAN HUT RI KE-80</h3>
            <hr>
            <div class="row m-3">
              <?php while ($i < count($galeri)): ?>
                  <div class="col-lg-4 mt-4">
                    <img src="<?=$galeri[$i]?>" class="img-fluid rounded">
                  </div>
                  <?php $i++; ?>
              <?php endwhile;?>
            </div>
          </div>
        </div>
      </div>
  </section>


     <?php include 'footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>