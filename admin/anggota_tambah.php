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
            <label for="exampleInputEmail1">Jabatan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="jabatan" placeholder="Masukkan Jabatan">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Angkatan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="angkatan" placeholder="Masukkan Angkatan">
        </div>
        <button type="submit" name="daftar" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>