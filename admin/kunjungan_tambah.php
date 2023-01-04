<?php include('../config/auto_load.php'); ?>

<?php include('kunjungan_control.php') ?>

<?php include('../template/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-10">
        <h2 class="text-gray-800">Daftar Kunjungan Rukes</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">NIM</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nim" placeholder="Masukkan NIM">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal</label>
            <input type="date" class="form-control" id="exampleInputEmail1" name="tgl">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Keterangan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ket" placeholder="Masukkan Keterangan">
        </div>
        <button type="submit" name="daftar" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>