<?php
include('config.php');

// $sql = $mysqli->query("SELECT * FROM `tanggapan` WHERE `keterangan` = 'valid' ");
// $data = $sql->fetch_all(MYSQLI_ASSOC);

$sql = $mysqli->query("SELECT `tanggapan`.`id_pengaduan`, `tanggapan`,`tgl_tanggapan`, `tanggapan`.`tanggapan`, 
`pengaduan`.`id_pengaduan`, `pengaduan`.`isi_laporan`, `pengaduan`.`foto` FROM `tanggapan` INNER JOIN `pengaduan` 
ON `tanggapan`.`id_pengaduan` = `pengaduan`.`id_pengaduan`");
$data = $sql->fetch_all(MYSQLI_ASSOC);