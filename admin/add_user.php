<?php

include('../config.php');

if(isset($_POST['daftar'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];
    $level = 'masyarakat';

    $stmt = $mysqli->prepare("INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `level`) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param('ssssss', $nik, $nama, $username, $password, $telp, $level);
    if($stmt->execute()){
        header('location:index.php');
        exit;
    }
}