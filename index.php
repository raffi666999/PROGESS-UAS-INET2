<?php
    include("config/koneksi.php");
    session_start();

    $kegiatan = mysqli_query($koneksi, "SELECT * FROM kegiatan");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website pendaftaran peserta didik baru secara online SMP SWADHIPA 1 NATAR">
    <meta name="author" content="Theokusumaaa">
    <title>KSR PMI STMIK INDONESIA BANJARMASIN</title>
    <!-- <link rel="canonical" href="nama-domain"> -->

    <!-- Bootstrap core CSS -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/logo.png" sizes="180x180">
    <link rel="icon" href="assets/img/PMI.png" sizes="32x32" type="image/png">

    <!-- <meta name="theme-color" content="#563d7c"> -->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        .nav-link {
            padding-left: 30px !important;
        }
    </style>
    <!-- Custom styles for this template -->
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow" style="background: white !important; height: 70px;">
            <div class="container">
                <a class="navbar-brand" href="#"><b>KSR PMI STMIK INDONESIA BANJARMASIN</b></a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kunjungan.php">KUNJUNGAN RUKES</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="anggota.php">ANGGOTA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">MASUK</a>
                        </li>
                    </ul>
                    <a href="registrasi.php" class="btn btn-danger rounded-pill ml-3">DAFTAR</a>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" style="position: relative">
        <div class="container mt-5">
            <div class="row pt-5">
                <div class="col-md-7">
                    <h2 class="text-dark">PENDAFTARAN ONLINE <br> KSR PMI STMIK INDONESIA BANJARMASIN  <br></h2>
                    <p class="lead">
                        Untuk mahasiswa yang ingin bergabung bisa mendaftar melalui website ini atau langsung datang ke tempat pendaftaran
                    </p>
                    <a href="registrasi.php" class="btn btn-danger rounded-pill">DAFTAR SEKARANG</a>
                </div>
                <div class="col-md-5">
                <img src="assets/img/PMI.png" width="600" height="300" alt="">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    
                   
                        
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  
                
                        
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  
                   
                    </p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <!-- START THE FEATURETTES -->
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_object($kegiatan)): ?>
                <?php 
                $ganjil1 = "";
                $ganjil2 = "";
                if($i % 2 == 0){
                    $ganjil1 = "order-md-2";
                    $ganjil2 = "order-md-1";
                }
                $i++;
                ?>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7 <?=$ganjil1?>">
                        <h2 class="featurette-heading"><?=$row->judul?> <span class="text-muted"></span></h2>
                        <p class="lead">
                        <?=$row->isi?>
                        </p>
                    </div>
                    <div class="col-md-5 <?=$ganjil2?>">
                    <img src="assets/img/<?=$row->gambar?>" width="450" height="300" alt="">
                    </div>
                </div>
            <?php endwhile ?>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>
        <!-- /.container -->
        <!-- FOOTER -->
        <footer class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        </footer>
    </main>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script> -->

</body>
</html>