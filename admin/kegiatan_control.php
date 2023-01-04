<?php
include('../config/koneksi.php');
// tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM kegiatan");

// cek hasil
if(!$all_pendaftar) {
    die('Query Error : '. mysqli_error($koneksi));
}

if(isset($_POST["daftar"])){
    $gambar = $_POST["gambar"];
    $judul = $_POST["judul"];
    $isi = $_POST["isi"];


    mysqli_query($koneksi, "INSERT INTO kegiatan (gambar, judul, isi) VALUES ('$gambar', '$judul', '$isi')");
    header("Location: kegiatan.php");
}

if(isset($_GET["hapus"])){
    mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id = " . $_GET["hapus"]);
    header("Location: kegiatan.php");
}

?>