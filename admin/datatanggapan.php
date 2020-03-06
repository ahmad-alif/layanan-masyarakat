<?php
$result = $mysqli->query("SELECT `tanggapan`.`tanggapan`, `tanggapan`.`tgl_tanggapan` , `tanggapan`.`id_petugas`, 
`tanggapan`.`keterangan` , `pengaduan`.`id_pengaduan`, `pengaduan`.`isi_laporan`, `pengaduan`.`foto` FROM 
`tanggapan` INNER JOIN `pengaduan` ON `tanggapan`.`id_pengaduan` = `pengaduan`.`id_pengaduan` ORDER BY 
`tgl_pengaduan` ASC");
$tanggapan = $result->fetch_all(MYSQLI_ASSOC);