<?php
require('../view/layout/header.php');
include('validasi.php');
if (!access_management('validasi')) {
    header('location:../index.php');
}
?>

<table class="table table-hover mt-2">
    <?php tanggapan(); ?>
    <a class="btn btn-primary" href="view_validasi.php">Diproses</a>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">NIK</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Foto</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($pengaduann as $p) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $p['tgl_pengaduan']; ?></td>
                <td><?php echo $p['nik']; ?></td>
                <td><?php echo $p['isi_laporan']; ?></td>
                <td><img src="../masyarakat/foto/<?php echo $p['foto']; ?>" height="80px" width="80px"></td>
                <td><?php echo $p['status']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm col-6" href="view_valid.php?id_pengaduan=<?= $p['id_pengaduan'] ?>">Valid</a>
                    <a class="btn btn-danger btn-sm mt-1 col-6" href="view_tidakvalid.php?id_pengaduan=<?= $p['id_pengaduan'] ?>">Tidak Valid</a>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </tbody>
</table>

<?php
require('../view/layout/footer.php');
?>