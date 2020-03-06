<?php

// header('location:login.php');
include('config.php');
include('getdata.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Masyarakat</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4">
                    <h5><a class="blog-header-logo text-dark" href="index.php">Layanan Masyarakat</a></h5>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-success" href="login.php">Login</a>
                </div>
            </div>
        </header>

        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Selamat datang di Pusat Layanan Masyarakat</h1>
                <p class="lead my-3">Laporan semua keluhan anda disini.</p>
            </div>
        </div>
        <?php foreach ($data as $d) : ?>
            <?php
            $tgl = $d['tgl_tanggapan'];
            $tanggapan = $d['tanggapan'];
            $isi = $d['isi_laporan'];
            $foto = $d['foto'];
            ?>
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                            <h3 class="mb-0">Judul Pengaduan</h3>
                            <div class="mb-1 text-muted"><?= $tgl; ?></div>
                            <p class="card-text mb-auto"><?= $isi; ?></p>
                            <small class="card-text mb-auto"><?= $tanggapan; ?></small>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <!-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> -->
                            <img src="masyarakat/foto/<?= $foto ?>" class="bd-placeholder-img" width="280px" height="280px">
                            <title>Placeholder</title>
                            <!-- <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> -->
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</body>

</html>