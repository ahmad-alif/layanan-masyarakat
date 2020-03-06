<?php 
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Layanan Masyarakat</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"><a href="index.php">Layanan Masyarakat</a></span>
        <a class="btn btn-danger mr-2" href="logout.php">Logout</a>
    </nav>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- 404 Error Text -->
        <div class="text-center">
            <div class="error mx-auto mt-4" data-text="404">403</div>
            <p class="lead text-gray-800 mb-5">Access Forbidden!</p>
            <p class="text-gray-500 mb-0">Anda melanggar aturan web kami!</p>
            <a href="index.php">&larr; Kembali</a>
        </div>

    </div>
    </div>
    <div class="text-center bg-light fixed-bottom pt-1 pb-1">Copyright 2020 &copy All Right Reserved</div>
</body>

<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

</html>