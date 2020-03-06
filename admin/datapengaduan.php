<?php

include('../config.php');

switch(isset($_GET['action'])? $_GET['action'] : null){
    case 'belumdiproses':
        $status = 'belum diproses';

        $stmt = $mysqli->prepare("UPDATE `pengaduan` SET `status` = ? WHERE `id_pengaduan`=?");
        $id=$_GET['id_pengaduan'];
        $stmt->bind_param('si', $status, $id);
        if($stmt->execute()){
            header('location:view_datapengaduan.php');
            exit;
        }else{
            echo "Gagal";
            exit;
        }
        exit;
    $result = $mysqli->query("SELECT * FROM `pengaduan` ORDER BY `tgl_pengaduan` ASC");
    $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
    break;
    case 'diproses':
        $status = 'diproses';

        $stmt = $mysqli->prepare("UPDATE `pengaduan` SET `status` = ? WHERE `id_pengaduan`=?");
        $id=$_GET['id_pengaduan'];
        $stmt->bind_param('si', $status, $id);
        if($stmt->execute()){
            header('location:view_datapengaduan.php');
            exit;
        }else{
            echo "Gagal";
            exit;
        }
        exit;
    $result = $mysqli->query("SELECT * FROM `pengaduan` ORDER BY `tgl_pengaduan` ASC");
    $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
    break;
    case 'tidakdiproses':
        $status = 'tidak diproses';

        $stmt=$mysqli->prepare("UPDATE `pengaduan` SET `status`=? WHERE `id_pengaduan`=?");
        $id=$_GET['id_pengaduan'];
        $stmt->bind_param('si', $status, $id);
        if($stmt->execute()){
            header('location:view_datapengaduan.php');
            exit;
        }
        exit;
    $result = $mysqli->query("SELECT * FROM `pengaduan` ORDER BY `id_pengaduan`=?");
    $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
    break;
}
$result = $mysqli->query("SELECT * FROM `pengaduan` ORDER BY `tgl_pengaduan` ASC");
$pengaduan = $result->fetch_all(MYSQLI_ASSOC);