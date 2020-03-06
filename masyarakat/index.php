<?php
require('../view/layout/header.php');
if (!access_management('buat_pengaduan')) {
    header('location:../index.php');
}
?>

<p>Selamat datang <?= $_SESSION['username'] ?></p>

<?php
require('../view/layout/footer.php');
?>