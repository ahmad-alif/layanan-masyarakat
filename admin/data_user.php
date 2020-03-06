<?php

include('../config.php');

$result = $mysqli->query("SELECT `nik`, `nama`, `username`, `telp` FROM `masyarakat` ORDER BY `nik` ASC");
$data = $result->fetch_all(MYSQLI_ASSOC);
