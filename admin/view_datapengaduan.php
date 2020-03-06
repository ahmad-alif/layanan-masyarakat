<?php
require('../view/layout/header.php');
include('datapengaduan.php');
if (!access_management('atur_pengaduan')) {
  header('location:../index.php');
}
?>

<h5 class="card-header">Data Pengaduan</h5>
<table class="table table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
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
    foreach ($pengaduan as $p) : ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $p['tgl_pengaduan']; ?></td>
        <td><?php echo $p['nik']; ?></td>
        <td><?php echo $p['isi_laporan']; ?></td>
        <td><img src="../masyarakat/foto/<?php echo $p['foto']; ?>" height="80px" width="80px"></td>
        <td><?php echo $p['status']; ?></td>
        <td>
          <a class="btn btn-outline-success btn-sm col-9" href="datapengaduan.php?action=diproses&id_pengaduan=<?php echo $p['id_pengaduan'] ?>">Diproses</a><br>
          <a class="btn btn-outline-info btn-sm mt-1 col-9" href="datapengaduan.php?action=belumdiproses&id_pengaduan=<?php echo $p['id_pengaduan'] ?>">Belum Diproses</a><br>
          <a class="btn btn-outline-danger btn-sm mt-1 col-9" href="datapengaduan.php?action=tidakdiproses&id_pengaduan=<?php echo $p['id_pengaduan'] ?>">Tidak Diproses</a>
        </td>
      </tr>
    <?php $i++;
    endforeach; ?>
  </tbody>
</table>

<?php
require('../view/layout/footer.php');
?>