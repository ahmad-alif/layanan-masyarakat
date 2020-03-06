<?php
require('../view/layout/header.php');
if (!access_management('tambah_user')) {
    header('location:../index.php');
}
?>
    <form class="col-8" action="add_user.php" method="post">
        <p class="h5">Daftar</p><hr>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" class="form-control" name="nik" placeholder="Masukan NIK .." autofocus required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama .." required>
            </div>    
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Masukan Username .." required>
            </div>  
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password .." required>
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" class="form-control" name="telp" placeholder="08xxxxxxxxxx" required>
            </div>

                <input type="submit" class="btn btn-success mt-2" name="daftar" value="DAFTAR">		
            </div>
	</form>

<?php
require('../view/layout/footer.php');
?>