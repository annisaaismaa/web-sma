<?php
//melakukan koneksi ke database
include('koneksi.php');


//mengambil data dari form
$jawab = $_POST['tanya'];

//membaca nilai yang ada di database
$baca = mysql_query("SELECT * FROM polingpelayanan");
$data = mysql_fetch_array($baca);

//nilai yang tersimpan
$opsi1 = $data['smemuaskan'];
$opsi2 = $data['memuaskan'];
$opsi3 = $data['cmemuaskan'];
$opsi4 = $data['kmemuaskan'];

//menentukan proses penyimpanan
if($jawab == "smemuaskan")
{
	$simpan= $opsi1 + 1;
	$update = "UPDATE polingpelayanan SET smemuaskan = '$simpan' WHERE smemuaskan='$opsi1'";
	mysql_query($update);
	include ('hasil_polpel.php');
}
	else if($jawab == "memuaskan")
	{
		$simpan= $opsi2 + 1;
		$update = "UPDATE polingpelayanan SET memuaskan = '$simpan' WHERE memuaskan='$opsi2'";
		mysql_query($update);
		include ('hasil_polpel.php');
	}
	else if($jawab == "cmemuaskan")
	{
		$simpan= $opsi3 + 1;
		$update = "UPDATE polingpelayanan SET cmemuaskan = '$simpan' WHERE cmemuaskan='$opsi3'";
		mysql_query($update);
		include ('hasil_polpel.php');
	}
else
{
	$simpan= $opsi4 + 1;
		$update = "UPDATE polingpelayanan SET kmemuaskan = '$simpan' WHERE kmemuaskan='$opsi4'";
		mysql_query($update);
		include ('hasil_polpel.php');
}
?>
	