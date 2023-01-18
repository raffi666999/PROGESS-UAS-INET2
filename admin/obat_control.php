<?php
include('../config/koneksi.php');
// tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM obat");

// cek hasil
if(!$all_pendaftar) {
    die('Query Error : '. mysqli_error($koneksi));
}

if(isset($_POST["daftar"])){
    $nama = $_POST["nama"];
    $kegunaan = $_POST["kegunaan"];
    $stok = $_POST["stok"];


    mysqli_query($koneksi, "INSERT INTO obat (nama, kegunaan, stok) VALUES ('$nama', '$kegunaan', '$stok')");
    header("Location: obat.php");
}

if(isset($_GET["hapus"])){
    mysqli_query($koneksi, "DELETE FROM obat WHERE id = " . $_GET["hapus"]);
    header("Location: obat.php");
}

?>