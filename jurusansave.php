<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'psbdb';

$db = mysqli_connect($server, $user, $pass, $database);

if (isset($_POST['Submit'])){
	
$idjurusan = $_POST['idjurusan'];
$nmjurusan = $_POST['nmjurusan'];
$sql="INSERT INTO jurusan(idjurusan,nmjurusan)
values('$idjurusan','$nmjurusan')";
$query = mysqli_query($db,$sql);
}else{
die ("gagal...");
}

?>

<table width="500" border="0">
<tr>
<td><form id="form1" name="form1" method="post" action="daftarjurusan.php">
<label>
<input type="submit" name="Submit" value="Tambah Jurusan Lagi"/>
</label>
</form>
</td>
</tr>
</table>
<table width="500" border="0">
<tr>
<td><form id="form1" name="form1" method="post" action="daftarsiswa.php">
<label>
<input type="submit" name="Submit" value="Laman Pendaftaran Siswa"/>
</label>
</form>
</td>
</tr>
</table>
