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
    background : url('.base_url('assets/img/backreg.jpg') .');
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
<p class="salam">No surat : ' . $santri['id'] .' <br> Assalamualaikum Warahmatullahi Wabarakaatuh <br> Dengan ini saya selaku pengurus dari :
</p>
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
<td>: ' . $santri['izin'] . '</td>
</tr>
</table>
<p class="ket">Memberitahukan bahwa hari ini yang bersangkutan telah dipersilahkan untuk meminta ijin pulang ke kantor pusat dikarenakan
                <b>'. $santri['keterangan'].'</b>
</p>
<p class="ket"> Demikian kami sampaikan surat ini untuk dipergunakan sebagaimana mestinya. <br><br>Wssalamualaikum Warahmatullahi Wabarakaatuh
</p>

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

    <td>
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
