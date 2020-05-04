<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("psbdb2");
if(!$con)
{ die('tidak ada nama database tersebut: '.mysql_error());}
?>
<?php 
$koneksi = mysqli_connect("localhost","root","","psbdb2");
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>