<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style_index.css" rel="stylesheet">
<title>Hasil Vote</title>
</head>

<body>
<?php
//melakukan koneksi ke database
include ('koneksi.php');



//mengambil data
$baca = mysql_query("SELECT * FROM polingpelayanan");
$data = mysql_fetch_array($baca);

//nilai tiap opsi
$opsi1 = $data['smemuaskan'];
$opsi2 = $data['memuaskan'];
$opsi3 = $data['cmemuaskan'];
$opsi4 = $data['kmemuaskan'];

//menghitung total pemilih
$total = $opsi1+$opsi2+$opsi3+$opsi4;

//membuat prosentase tiap opsi
$persenOpsi1 = ceil($opsi1/$total*100);
$persenOpsi2 = ceil($opsi2/$total*100);
$persenOpsi3 = ceil($opsi3/$total*100);
$persenOpsi4 = ceil($opsi4/$total*100);

//menentukan panjang grafik
$panjangOpsi1 = $persenOpsi1 * 30/100;
$panjangOpsi2 = $persenOpsi2 * 30/100;
$panjangOpsi3 = $persenOpsi3 * 30/100;
$panjangOpsi4 = $persenOpsi4 * 30/100;
?>
<div align="center">
<p>&nbsp;</p>
<p>Data Hasil Vote Polling Pelayanan </p>
<p>&nbsp;</p>
<p><b>Sangat Memuaskan</b> (Jumlah: <?php echo $opsi1; ?> | <?php echo $persenOpsi1; ?>%) <div style="height: 10px; width: <?php echo $panjangOpsi1; ?>%; background-color: brown;" title="Sangat Memuaskan (Jumlah: <?php echo $opsi1; ?> | <?php echo $persenOpsi1; ?>%)"></div></p>

<p><b>Memuaskan</b> (Jumlah: <?php echo $opsi2; ?> | <?php echo $persenOpsi2; ?>%) <div style="height: 10px; width: <?php echo $panjangOpsi2; ?>%; background-color: blue;" title="Memuaskan (Jumlah: <?php echo $opsi2; ?> | <?php echo $persenOpsi2; ?>%)"></div></p>

<p><b>Cukup Memuaskan</b> (Jumlah: <?php echo $opsi3; ?> | <?php echo $persenOpsi3; ?>%) <div style="height: 10px; width: <?php echo $panjangOpsi3; ?>%; background-color: magenta;" title="Cukup Memuaskan (Jumlah: <?php echo $opsi3; ?> | <?php echo $persenOpsi3; ?>%)"></div></p>

<p><b>Kurang Memuaskan</b> (Jumlah: <?php echo $opsi4; ?> | <?php echo $persenOpsi4; ?>%) <div style="height: 10px; width: <?php echo $panjangOpsi4; ?>%; background-color: purple;" title="Kurang Memuaskan (Jumlah: <?php echo $opsi4; ?> | <?php echo $persenOpsi4; ?>%)"></div></p>

<p align="center">&nbsp;</p>
<p align="center"><b>TOTAL = <?php echo $total." ORANG";?></b></p>
</div>
</body>
</html>