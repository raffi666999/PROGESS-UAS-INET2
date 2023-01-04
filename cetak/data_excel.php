<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data pendaftaran.xls");

include('../config/koneksi.php');

// tabel pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT pendaftar.*, nilai.pertanyaan_1, nilai.pertanyaan_2, nilai.pertanyaan_3, nilai.status FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id order by status, nama");

$html = '
<table width="100%" border="1">
<tr>
    <th width="5%">No</th>
    <th width="13%">Nama</th>
    <th width="20%">TTL</th>
    <th width="5%">JK</th>
    <th>Alamat</th>
    <th width="7%">Telepon</th>
    <th width="5%">Nilai</th>
    <th width="10%">Status</th>
</tr>';

$no = 1;
while($p = mysqli_fetch_array($all_pendaftar)) { 
    if($p['status'] == 0) {
        $status = "Baru";
    } else if($p['status'] == 1) {
        $status = "Lolos";
    } else {
        $status = "Tdk Lolos";
    }

    $html .= '
    <tr>
        <td align="center">'. $no++ . '</td>
        <td>'. $p['nama'] . '</td>
        <td>'. $p['tmpt_lahir'] . ', '. $p['tgl_lahir'] . '</td>
        <td align="center">'. $p['jenis_kelamin'] . '</td>
        <td>'. $p['alamat'] . '</td>
        <td>'. $p['telepon'] . '</td>
        <td align="center">'. $status . '</td>
    </tr>';

}

$html .= '
</table>';

echo $html;