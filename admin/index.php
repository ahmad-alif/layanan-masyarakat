<?php
require('../view/layout/header.php');
if (!access_management('atur_pengaduan')) {
    header('location:../index.php');
}
?>

<p>Selamat datang <?php echo $_SESSION['username'] ?>!</p>

<?php
require('../view/layout/footer.php');
?>