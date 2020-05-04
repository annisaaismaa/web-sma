<?php
//melakukan koneksi ke database
include('koneksi.php');


//mengambil data dari form
$jawab = $_POST['tanya'];

//membaca nilai yang ada di database
$baca = mysql_query("SELECT * FROM polingweb");
$data = mysql_fetch_array($baca);

//nilai yang tersimpan
$opsi1 = $data['sangat_baik'];
$opsi2 = $data['baik'];
$opsi3 = $data['cukup'];
$opsi4 = $data['kurang'];

//menentukan proses penyimpanan
if($jawab == "sangat_baik")
{
	$simpan= $opsi1 + 1;
	$update = "UPDATE polingweb SET sangat_baik = '$simpan' WHERE sangat_baik='$opsi1'";
	mysql_query($update);
	include ('hasil_polweb.php');
}
	else if($jawab == "baik")
	{
		$simpan= $opsi2 + 1;
		$update = "UPDATE polingweb SET baik = '$simpan' WHERE baik='$opsi2'";
		mysql_query($update);
		include ('hasil_polweb.php');
	}
	else if($jawab == "cukup")
	{
		$simpan= $opsi3 + 1;
		$update = "UPDATE polingweb SET cukup = '$simpan' WHERE cukup='$opsi3'";
		mysql_query($update);
		include ('hasil_polweb.php');
	}
else
{
	$simpan= $opsi4 + 1;
		$update = "UPDATE polingweb SET kurang = '$simpan' WHERE kurang='$opsi4'";
		mysql_query($update);
		include ('hasil_polweb.php');
}
?>
	