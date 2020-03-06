<?php
require('../view/layout/header.php');
include('../config.php');
if (!access_management('validasi')) {
   header('location:../index.php');
}

// Get id_petugas from table petugas
   $us = $_SESSION['username'];
   $pw = $_SESSION['password'];
   $sql = $mysqli->query("SELECT `id_petugas` FROM `petugas` WHERE `username`='$us' AND `password`='$pw'");
   $data = $sql->fetch_assoc();

?>

<p>Selamat datang <?php echo $_SESSION['username'] ?>!</p>

<?php
require('../view/layout/footer.php');
?>