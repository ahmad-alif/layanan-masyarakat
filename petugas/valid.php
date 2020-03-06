<?php
include('../config.php');

if(isset($_POST['valid'])){
    $tgl = $_POST['tgl'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];
    $id_pengaduan = $_POST['id_pengaduan'];
    $ket = 'valid';

    $stmt = $mysqli->prepare("INSERT INTO `tanggapan` (`id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`, `keterangan`) VALUES (?,?,?,?,?)");
    $stmt->bind_param('sssss', $id_pengaduan, $tgl, $tanggapan, $id_petugas, $ket);
    if($stmt->execute()){
        header('location:view_validasi.php');
        exit;
    }else{
        header('location:view_validasi.php?tanggapan=error');
        exit;
    }

}
$result = $mysqli->query("SELECT * FROM `pengaduan`");
$pengaduan = $result->fetch_all(MYSQLI_ASSOC);
