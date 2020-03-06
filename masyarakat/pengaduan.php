<?php
include('../config.php');

if(isset($_POST['kirim'])){
    $nik = $_POST['nik'];
    $tgl = $_POST['tgl'];
    $isi = $_POST['isi'];
    $foto = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];
    $status ='belum diproses';

    move_uploaded_file($file, "foto/".$foto);
    $stmt = $mysqli->prepare("INSERT INTO `pengaduan` (`tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES (?,?,?,?,?)");
    $stmt->bind_param('sssss', $tgl, $nik, $isi, $foto, $status);
    if($stmt->execute()){
        header('location:index.php');
        exit;
    }else{
        echo "Gagal!";
    }
}

$us = $_SESSION['username'];
$pw = $_SESSION['password'];
$result = mysqli_query($mysqli, "SELECT * FROM `masyarakat` WHERE `username`='$us' AND `password`='$pw'");
$data = mysqli_fetch_assoc($result);