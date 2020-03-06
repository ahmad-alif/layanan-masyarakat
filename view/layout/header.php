<?php
session_start();

include('../functions.php');

must_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Layanan Masyarakat</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"><a href="index.php">Layanan Masyarakat</a></span>
        <a class="btn btn-danger mr-2" href="../logout.php">Logout</a>
    </nav>
    
        <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <?php if($_SESSION['level']=='admin') { ?>
                <a href="view_datauser.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user mr-2"></i>Data User</a>
                <a href="view_datapengaduan.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-list mr-2"></i>Data Pengaduan</a>
                <a href="view_laporan.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-clipboard mr-2"></i>Laporan</a>
            <?php } else if($_SESSION['level']=='petugas') { ?>
                <a href="view_validasi.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-key mr-2"></i>Tanggapan</a>
            <?php } else if($_SESSION['level']=='masyarakat') { ?>
                <a href="view_pengaduan.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-edit mr-2"></i>Pengaduan</a>
            <?php } ?>
        </div>
        </div>
        <div class="container mt-3">
            
            