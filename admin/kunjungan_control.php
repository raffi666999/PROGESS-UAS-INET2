<?php
include('../config/koneksi.php');
// tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM kunjungan");

// cek hasil
if(!$all_pendaftar) {
    die('Query Error : '. mysqli_error($koneksi));
}

if(isset($_POST["daftar"])){
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $tgl = $_POST["tgl"];
    $ket = $_POST["ket"];


    mysqli_query($koneksi, "INSERT INTO kunjungan (nama, nim, tanggal, ket) VALUES ('$nama', '$nim', '$tgl', '$ket')");
    header("Location: kunjungan.php");
}

if(isset($_GET["hapus"])){
    mysqli_query($koneksi, "DELETE FROM kunjungan WHERE id = " . $_GET["hapus"]);
    header("Location: kunjungan.php");
}

?>