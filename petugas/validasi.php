<?php

include('../config.php');

// Query menampilkan data pengaduan diproses
$result = $mysqli->query("SELECT * FROM `pengaduan` WHERE `status` = 'diproses' ORDER BY `tgl_pengaduan` ASC");
$pengaduan = $result->fetch_all(MYSQLI_ASSOC);

// Query menampilkan data pengaduan tidak diproses
$sql = $mysqli->query("SELECT * FROM `pengaduan` WHERE `status` = 'tidak diproses' ORDER BY `tgl_pengaduan` ASC");
$pengaduann = $sql->fetch_all(MYSQLI_ASSOC);