<?php include('../config/auto_load.php'); ?>

<?php include('anggota_control.php') ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-10">
        <h2 class="text-gray-800">Daftar Anggota</h2>
    </div>
    <div class="col">
        <a href="anggota_tambah.php" class="text-white btn btn-success">Tambah Data</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
          <tr>
            <td scope="col">No</td>
            <td scope="col">Nama</td>
            <td scope="col">NIM</td>
            <td scope="col">Jabatan</td>
            <td scope="col">Angkatan</td>
          </tr>

          <?php
          $no = 1;
          while($p = mysqli_fetch_array($all_pendaftar)) { ?>

          <tr>
            <td><?= $no++ ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['nim'] ?></td>
            <td><?= $p['jabatan'] ?></td>
            <td><?= $p['angkatan'] ?></td>
            <td class="text-center"> <a href="anggota_control.php?hapus=<?= $p['id'] ?>" class="text-white btn btn-danger">Hapus</a></td>
          </tr>

          <?php }
          
          
          if(mysqli_num_rows($all_pendaftar) == 0) {
            echo "<tr><td colspan='8' align='center'><b>Belum Ada Anggota</b></td></tr>";
          }

          ?>
          
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

