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
  </div>
  <div class="row">
    <div class="col-md-12">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukkan Obat">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kegunaan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="kegunaan" placeholder="Masukkan Kegunaan">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="stok" placeholder="Masukkan Stok">
        </div>
        <button type="submit" name="daftar" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>