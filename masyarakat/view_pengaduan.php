<?php
require('../view/layout/header.php');
include('pengaduan.php');
if (!access_management('buat_pengaduan')) {
    header('location:../index.php');
}
?>

<form class="col-8" action="pengaduan.php" method="post" enctype="multipart/form-data">
    <p class="h5">Pengaduan</p><hr>
        <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" value="<?php echo $data['nik'] ?>" required="required" readonly>
        </div>
        <div class="form-group">
            <label>Tanggal Pengaduan</label>
            <input type="text" class="form-control" name="tgl" value="<?php echo date('Y-m-d'); ?>" readonly required="required">
        </div>
        <div class="form-group">
            <label>Pengaduan</label>
            <textarea rows="8" type="text" class="form-control" name="isi" placeholder="Tuliskan isi pengaduan.." autofocus required="required"></textarea>
        </div>  
        <div class="form-group">
            <label>Foto</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="foto" name="foto" accept=".jpg, .jpeg, .png, .gif">
                <label class="custom-file-label" for="image">Choose file</label>
                <small><font color="red">hanya bisa upload format .jpg, .jpeg, .png, .gif</font></small>
            </div>
        </div>
                
            <input type="submit" class="btn btn-success mt-2 mb-4" name="kirim" value="Kirim"><br><br>
        
</form>

<?php
require('../view/layout/footer.php');
?>