<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>SMKN 4 TASIKMALAYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body style="background-color: whitesmoke;">

      <?php include 'navbar.php';?>

 <!-- SECTION ESKUL -->
     <section>
        <div class="container pt-5 mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <h3 class="mb-0">Ekstrakurrikuler</h3>
                        <h3 class="text-primary ">Siswa</h3>
                        <div class="row">
                            <?php
                            $eskul = [
                                ["nama" => "PASKIBRA" , "gambar" => "image/paskib.jpg"],
                                ["nama" => "PRAMUKA" , "gambar" => "image/pramuka.jpg"],
                                ["nama" => "PMR" , "gambar" => "image/pmr.jpg"],
                                ["nama" => "PLH" , "gambar" => "image/plh.jpg"],
                                ["nama" => "IT CLUB" , "gambar" => "image/itclub.jpg"],
                                ["nama" => "PKS" , "gambar" => "image/pks.jpg"],
                                ["nama" => "PERISAI DIRI" , "gambar" => "image/pd.jpg"],
                                ["nama" => "ENGLISH CLUB" , "gambar" => "image/english.jpg"],
                                ["nama" => "CINEMATOGRAPHY" , "gambar" => "image/cinema.jpg"],
                                ["nama" => "LASKAR PUSTAKA" , "gambar" => "image/laskar.jpg"],
                                ["nama" => "IRMA" , "gambar" => "image/irma.jpg"],
                                ["nama" => "BULU TANGKIS" , "gambar" => "image/pb.jpg"],
                                ["nama" => "FUTSAL" , "gambar" => "image/futsal.jpg"],
                                ["nama" => "BASKET" , "gambar" => "image/basket.jpg"],
                                ["nama" => "VOLLY" , "gambar" => "image/volly.jpg"],
                            ];

                            foreach ($eskul as $item) { ?>
                            <div class="col-lg-4">
                                <div class="card shadow rounded m-3 p-4 d-flex align-items-center">
                                    <img src="<?= $item['gambar']; ?>" alt="" width="150" height="150">
                                <div class="card-body  border-0">
                                       <h4><?= $item['nama']; ?></h4>
                                </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- TUTUP SECTION ESKUL -->
     
   
    
    

 </body>
 </html