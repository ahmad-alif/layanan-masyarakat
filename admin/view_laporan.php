<?php
include('../config.php');
include('../view/layout/header.php');
include('datapengaduan.php');
if (!access_management('cetak_laporan')) {
    header('location:../index.php');
}
?>

<a class="btn btn-primary mb-4 disabled" href="view_laporan.php">Laporan Pengaduan</a>
<a class="btn btn-primary mb-4" href="view_laporan_tanggapan.php">Laporan Tanggapan</a>
<div class="content" id="content">
    <h5 class="card-header">Laporan Pengaduan</h5>
    <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">NIK</th>
                <th scope="col">Isi Laporan</th>
                <th scope="col">Foto</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($pengaduan as $p) : ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $p['tgl_pengaduan']; ?></td>
                    <td><?php echo $p['nik']; ?></td>
                    <td><?php echo $p['isi_laporan']; ?></td>
                    <td><img src="../masyarakat/foto/<?php echo $p['foto']; ?>" height="80px" width="80px"></td>
                    <td><?php echo $p['status']; ?></td>
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