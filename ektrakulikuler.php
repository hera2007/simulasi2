            <!DOCTYPE html>
            <html lang="en">

          <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMKN Negeri 4 Tasikmalaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

            <body>
                <!-- Navbar -->
                <?php include 'navbar.php' ?>
                <!-- SECTION TUTUP NAVBAR -->

                <?php
                // Data eskul
                $eskul1 = [
                    
                    ["img" => "galeri/pks..png", "nama" => "PKS"], 
                    ["img" => "galeri/pks..png", "nama" => "PKS"], 
                    ["img" => "galeri/pks..png", "nama" => "PKS"], 
                   
                ];


                ?>

                <!-- SECTION EKTRAKULIKULER -->

                <section>
                    <div class="container px-5 mt-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card border-0">
                                    <h3 class="mb-0"> Ektrakulikuler</h3>
                                    <h3 class="text-primary"> Siswa</h3>
                                    <div class="row">
                                        <?php foreach ($eskul1 as $item): ?>
                                        <div class="col-lg-4 ">
                                            <div class="card shadow rounded m-3 p-4 d-flex align-items-center ">
                                                <img src="<?= $item ['img']?>" alt="" width="150" height="150">
                                                <div class="card-body  border-0">
                                                    <h4><?= $item ['nama'] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    
                    <!-- SECTION FOOTER -->
                
                    <!-- TUTUP SECTION FOOTER -->
                <?php include 'footer.php' ?>
            </body>
            </html>