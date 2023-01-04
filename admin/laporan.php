<?php include('../config/auto_load.php'); ?>

<?php include('laporan_control.php'); ?>


<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Laporan Pendaftaran</h1>
  
  <a href="<?= $base_url ?>/cetak/data_pendaftar.php" class="btn btn-warning btn-sm mb-3" target="_blank">Cetak Data Pendaftar PDF</a> 
  <a href="<?= $base_url ?>/cetak/data_excel.php" class="btn btn-success btn-sm mb-3" target="_blank">Cetak Data Pendaftar EXCEL</a> 

  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered table-hover">
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>Pertanyaan 1</td>
          <td>Pertanyaan 2</td>
          <td>Pertanyaan 3</td>
          <td>Status</td>
          <td>Actions</td>
        </tr>

        <?php
        $no = 1;
        while($p = mysqli_fetch_array($all_pendaftar)) { ?>

        <tr>
          <td><?= $no++ ?></td>
          <td><?= $p['nama'] ?></td>
          <td><?= $p['alamat'] ?></td>
          <td><?= $p['Pertanyaan_1'] ?></td>
          <td><?= $p['Pertanyaan_2'] ?></td>
          <td><?= $p['Pertanyaan_3'] ?></td>
          <?php

          if($p['status'] == 0) {
            $status = '<span class="badge badge-info">BARU</span>';

          } else if ($p['status'] == 1) {
            $status = '<span class="badge badge-success">LOLOS</span>';

          } else if ($p['status'] == 2) {
            $status = '<span class="badge badge-danger">TIDAK LOLOS</span>';
          }

          ?>
          <td><?= $status ?></td>
          <td>
              <a href="<?= $base_url ?>/cetak/detail_cetak.php?id=<?= $p['id'] ?>" class="btn btn-warning btn-sm" target="_blank">Cetak</a> 
          </td>
        </tr>

        <?php }
        
        
        if(mysqli_num_rows($all_pendaftar) == 0) {
          echo "<tr><td colspan='8' align='center'><b>Belum Ada pendaftar baru</b></td></tr>";
        }

        ?>

      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

