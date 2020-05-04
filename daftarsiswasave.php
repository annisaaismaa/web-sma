<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'psbdb';

$db = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['Submit'])){
	
$nosiswa = $_POST['nosiswa'];
$tahunangkatan = $_POST['tahunangkatan'];
$idjurusan = $_POST['idjurusan'];
$nama = $_POST['nama'];
$jkelamin = $_POST['jkelamin'];
$agama = $_POST['agama'];
$gdarah = $_POST['gdarah'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$tgllahir = $_POST['tgllahir'];
$tmptlahir = $_POST['tmptlahir'];
$namaayah = $_POST['namaayah'];
$pekerjaanayah = $_POST['pekerjaanayah'];
$namaibu = $_POST['namaibu'];
$pekerjaanibu = $_POST['pekerjaanibu'];
$sekolahasal = $_POST['sekolahasal'];
$sql="INSERT INTO siswa(nosiswa,tahunangkatan,idjurusan,nama,jkelamin,agama,gdarah,telepon,email,alamat,tgllahir,tmptlahir,
		namaayah,pekerjaanayah,namaibu,pekerjaanibu,sekolahasal)
values('$nosiswa','$tahunangkatan','$idjurusan','$nama','$jkelamin','$agama','$gdarah','$telepon','$email',
		'$alamat','$tgllahir','$tmptlahir','$namaayah','$pekerjaanayah','$namaibu','$pekerjaanibu','$sekolahasal')";
$query = mysqli_query($db,$sql);
}else{
die ("gagal...");
}

?>

<table width="500" border="0">
<tr>
<td><form id="form1" name="form1" method="post" action="home.php">
<label>
<input type="submit" name="Submit" value="Kembali Ke Home"/>
</label>
</form>
</td>
</tr>
</table>
<table width="500" border="0">
<tr>
<td><form id="form1" name="form1" method="post" action="siswatampil.php">
<label>
<input type="submit" name="Submit" value="Lihat Daftar Siswa"/>
</label>
</form>
</td>
</tr>
</table>


