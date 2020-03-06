<?php
require('../view/layout/header.php');
include('data_user.php');
if (!access_management('atur_datauser')) {
  header('location:../index.php');
}
?>
<h5 class="card-header">Data User</h5>
<a class="btn btn-success mt-2" href="view_adduser.php">Tambah User</a>

<table class="table table-hover mt-2">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">No Telp</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;
    foreach($data as $d) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $d['nik']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['telp']; ?></td>
      </tr>
    <?php $i++;
    endforeach; ?>
  </tbody>
</table>

<?php
require('../view/layout/footer.php');
?>