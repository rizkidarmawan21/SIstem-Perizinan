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
    background : url('.base_url('assets/img/backKeluar.jpg') .');
    background-size :10px;
    font-family: Times New Roman;
}

.tabel1 {
    display:block;
    font-size:11px;
    top:10px;
}
.salam {
    display:block;
    font-size:11px;
    top:11px;
}
.ket {
    display:block;
    font-size:11px;
    top:10px;
    text-align: justify; 
    text-indent: 0.2in;
}
.izin {
    display:block;
    font-size:10px;
    font-weight:bold;
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
<td>: ' . $santri['keterangan'] . '</td>
</tr>
<tr>
<td>Waktu Kembali</td>
<td>: Pukul ' . $santri['jam_kembali_keluar'] . ' WIB</td>
</tr>
</table>

<br>

<label>Catatan :</label>
<ul>
<li>Kartu Izin Dikeluarkan Resmi dari Pihak Pesantren.</li>
<li>Santri Diperbolehkan Izin Jika Dalam Kondisi Mendesak (Sesuai Peraturan Pesantren).</li>
<li>Durasi Santri Izin Sesuai Dari Pihak Pesantren,Bila Melampui Batas akan dikenai <b>Takziran</b>.</li>
<li>Wajib konfirmasi saat kembali ke kantor kampus.</li>
</ul>

<br>
<table border="0" class="tabel2"  cellspacing="0">


<tr>
    <td style="color:white;">
        <br>
        <br>
        <br>
        <br>
        <br>
        localhost:8080/sistemperizin
    </td>

    <td width="50%">
        Semarang, '. date('d F Y').'
        '. $kampus.'
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        ...............................

    </td>
</tr>  
</table>


';

$html  .=  '</center>
</body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output('Perizinan.pdf', 'I');
