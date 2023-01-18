<?php include('../config/auto_load.php'); ?>

<?php include('obat_control.php') ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-10">
        <h2 class="text-gray-800">Daftar Obat</h2>
    </div>
    <div class="col">
        <a href="obat_tambah.php" class="text-white btn btn-success">Tambah Data</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
          <tr>
            <td scope="col">No</td>
            <td scope="col">Nama Obat</td>
            <td scope="col">Kegunaan</td>
            <td scope="col">Stok</td>
          </tr>

          <?php
          $no = 1;
          while($p = mysqli_fetch_array($all_pendaftar)) { ?>

          <tr>
            <td><?= $no++ ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['kegunaan'] ?></td>
            <td><?= $p['stok'] ?></td>
            <td class="text-center"> <a href="obat_control.php?hapus=<?= $p['id'] ?>" class="text-white btn btn-danger">Hapus</a></td>
          </tr>

          <?php }
          
          
          if(mysqli_num_rows($all_pendaftar) == 0) {
            echo "<tr><td colspan='8' align='center'><b>Belum Ada Obat Baru</b></td></tr>";
          }

          ?>
          
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

