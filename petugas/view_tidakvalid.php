<?php
require('../view/layout/header.php');
include('tidakvalid.php');
if (!access_management('tanggapan')) {
    header('location:../index.php');
}

// Get id_petugas from table petugas
   $us = $_SESSION['username'];
   $pw = $_SESSION['password'];
   $sql = $mysqli->query("SELECT `id_petugas` FROM `petugas` WHERE `username`='$us' AND `password`='$pw'");
   $data = $sql->fetch_assoc();

?>
    <form class="col-8" action="tidakvalid.php" method="post">
        <p class="h5">Tanggapan Tidak Valid</p><hr>
            <div class="form-group">
                <label>Id Pengaduan</label>
                <input type="text" class="form-control" name="id_pengaduan" value="<?= $_GET['id_pengaduan'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Id Petugas</label>
                <input type="text" class="form-control" name="id_petugas" value="<?= $data['id_petugas'] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Tanggal Terproses</label>
                <input type="text" class="form-control" name="tgl" value="<?= date('Y-m-d') ?>" readonly>
            </div>
            <div class="form-group">
                <label>Tanggapan</label>
                <textarea rows="6" class="form-control" name="tanggapan" placeholder="Masukan tanggapan..." atofocus></textarea>
            </div>

                <input type="submit" class="btn btn-success mt-2" name="tidakvalid" value="Kirim">		
            </div>
	</form>

<?php
require('../view/layout/footer.php');
?>