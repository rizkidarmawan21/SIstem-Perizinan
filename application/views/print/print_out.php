<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A6-P']);
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="'.base_url('assets/img/logo ponpes.png') .'">
    <title>' . $title . '</title>
</head>
<body>
<style>
body {
    background : url('.base_url('assets/img/back.jpg') .');
    background-size :100px;
    font-family: Times New Roman;
}

.tabel1 {
    display:block;
    font-size:11px;
    top:10px;
}
.tabel2 {
    font-size: 11px;
    text-align:center;
}

ul {
    font-size:10px;
}
</style>
<br>
<br>
<br>
<table class="tabel1">
<tr>
<td>Nama Santri</td>
<td>: ' . $santri['nama'] . '</td>
</tr>
<tr>
<td>Kelas</td>
<td>: ' .  $santri['kelas'] . '</td>
</tr>
<tr>
<td>Alamat</td>
<td>: ' . $santri['alamat'] . '</td>
</tr>
<tr>
<td>Keperluan</td>
<td>: ' . $santri['izin'] . '-' . $santri['keterangan'] . '</td>
</tr>
<tr>
<td>Nama Wali</td>
<td>: ' . $santri['wali'] . '</td>
</tr>
<tr>
<td>No. Telp</td>
<td>: ' . $santri['no_telepon'] . '</td>
</tr>
</table>
<br>

<table border="1" class="tabel2"  cellspacing="0">
<tr>
    <td>Tanggal  Izin <br>' . date('d F Y', $santri['tgl_ijin']) . '</td>
    <td >Tanggal Kembali <br>' . date('d F Y', strtotime($santri['tgl_kembali'])) . '</td>
    <td >TTD Pengurus <br> Kampus</td>
</tr>

<tr>
    <td>
        <br>
        <br>
        <br>
        <br>
        <br>
        ( TTD Pengurus )
    </td>
    <td>
        <br>
        <br>
        <br>
        <br>
        <br>
        ( TTD Pengurus )
    </td>
    <td>
        <br>
        <br>
        <br>
        <br>
        <br>
        ( TTD Pengurus )

    </td>
</tr>  
</table>
<label>Catatan :</label>
<ul>
<li>Kartu Izin Dikeluarkan Resmi dari Pihak Pesantren.</li>
<li>Santri Diperbolehkan Izin Jika Dalam Kondisi Mendesak (Sesuai Peraturan Pesantren).</li>
<li>Durasi Santri Izin Sesuai Dari Pihak Pesantren,Bila Melampui Batas akan dikenai <b>Takziran</b>.</li>
<li>Sebagai Bukti Resmi Izin Surat Ini tertanda Tangani dan Stempel Pada Kolom Diatas.</li>
<li>Telah Izin dan Kembali Wajib Lapor Kantor Kampus.</li>
</ul>

';

$html  .=  '</center>
</body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output('Perizinan.pdf', 'I');
