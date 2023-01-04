<?php include('../config/auto_load.php'); ?>

<?php include('kegiatan_control.php') ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-10">
        <h2 class="text-gray-800">Daftar Kegiatan</h2>
    </div>
    <div class="col">
        <a href="kegiatan_tambah.php" class="text-white btn btn-success">Tambah Data</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
          <tr>
            <td scope="col">No</td>
            <td scope="col">Gambar</td>
            <td scope="col">Judul</td>
            <td scope="col">Keterangan</td>
          </tr>

          <?php
          $no = 1;
          while($p = mysqli_fetch_array($all_pendaftar)) { ?>

          <tr>
            <td><?= $no++ ?></td>
            <td><img src="../assets/img/<?= $p['gambar'] ?>" alt="" width="500px" height="300px"></td>
            <td><?= $p['judul'] ?></td>
            <td><?= $p['isi'] ?></td>
            <td class="text-center"> <a href="kegiatan_control.php?hapus=<?= $p['id'] ?>" class="text-white btn btn-danger">Hapus</a></td>
          </tr>

          <?php }
          
          
          if(mysqli_num_rows($all_pendaftar) == 0) {
            echo "<tr><td colspan='8' align='center'><b>Belum Ada Kegiatan</b></td></tr>";
          }

          ?>
          
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

