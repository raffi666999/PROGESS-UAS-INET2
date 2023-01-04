<?php
include('../config/koneksi.php');
// tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM anggota");

// cek hasil
if(!$all_pendaftar) {
    die('Query Error : '. mysqli_error($koneksi));
}

if(isset($_POST["daftar"])){
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jabatan = $_POST["jabatan"];
    $angkatan = $_POST["angkatan"];


    mysqli_query($koneksi, "INSERT INTO anggota (nama, nim, jabatan, angkatan) VALUES ('$nama', '$nim', '$jabatan', '$angkatan')");
    header("Location: anggota.php");
}

if(isset($_GET["hapus"])){
    mysqli_query($koneksi, "DELETE FROM anggota WHERE id = " . $_GET["hapus"]);
    header("Location: anggota.php");
}

?>