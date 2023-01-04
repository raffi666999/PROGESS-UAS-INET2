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
  </div>
  <div class="row">
    <div class="col-md-12">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Gambar</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="gambar" placeholder="Masukkan File Gambar">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Isi</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="isi" placeholder="Masukkan Isi/Keterangan">
        </div>
        <button type="submit" name="daftar" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>