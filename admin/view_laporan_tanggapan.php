<?php
include('../config.php');
include('../view/layout/header.php');
include('datatanggapan.php');
if (!access_management('cetak_laporan')) {
    header('location:../index.php');
}
?>

<a class="btn btn-primary mb-4" href="view_laporan.php">Laporan Pengaduan</a>
<a class="btn btn-primary mb-4 disabled" href="view_laporan_tanggapan.php">Laporan Tanggapan</a>
<div class="content" id="content">
    <h5 class="card-header">Laporan Tanggapan</h5>
    <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Id Petugas</th>
                <th scope="col">Isi Pengaduan</th>
                <th scope="col">Tanggapan</th>
                <th scope="col">Foto</th>
                <th scope="col">keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($tanggapan as $t) : ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $t['tgl_tanggapan']; ?></td>
                    <td><?php echo $t['id_petugas']; ?></td>
                    <td><?php echo $t['isi_laporan']; ?></td>
                    <td><?php echo $t['tanggapan']; ?></td>
                    <td><img src="../masyarakat/foto/<?php echo $t['foto']; ?>" height="80px" width="80px"></td>
                    <td><?php echo $t['keterangan']; ?></td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </tbody>
    </table>
</div>
<a class="btn btn-success" onclick="printContent('content')" href="">Cetak</a><br><br><br>

<?php
include('../view/layout/footer.php');
?>