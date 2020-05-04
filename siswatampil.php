<head>
	<style>
		td{padding:10px;}
		* {font-family:Arial, Helvetica, sans-serif;}
	</style>
</head>

<body bgcolor="">
<form id="form1" name="form1" method="post" action="">
  <table width="849" border="1" cellspacing="0">
    <tr style="background-color:#99FFFF; text-align:center;">
	<td><strong>No </strong></td>
	<td><strong>No. Pendaftaran</strong></td>
     <td><strong>No. Siswa</strong></td>
     <td><strong>Tahun Angkatan</strong></td>
	 <td><strong>Jurusan</strong></td>
     <td><strong>Nama</strong></td>
	 <td><strong>Jenis Kelamin</strong></td>
	 <td><strong>Agama</strong></td>
	 <td><strong>Golongan Darah</strong></td>
	 <td><strong>Telepon</strong></td>
	 <td><strong>Email</strong></td>
	 <td><strong>Alamat</strong></td>
	 <td><strong>Tanggal Lahir</strong></td>
	 <td><strong>Tempat Lahir</strong></td>
	 <td><strong>Nama Ayah</strong></td>
	 <td><strong>Pekerjaan Ayah</strong></td>
	 <td><strong>Nama Ibu</strong></td>
	 <td><strong>Pekerjaan Ibu</strong></td>
	 <td><strong>Sekolah Asal</strong></td>
    </tr>
    <?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'psbdb';

$db = mysqli_connect ($server, $user, $pass, $database);  
$sql="SELECT siswa.*,jurusan.nmjurusan from siswa LEFT JOIN jurusan ON siswa.idjurusan=jurusan.idjurusan";

$query = mysqli_query($db, $sql);
$data = array();
while ($row=mysqli_fetch_assoc($query)){
	$data[] = $row;
}
?>
<?php if(empty($data)): ?>
<p align="center">Tidak Ada Data.</p>
<?php else : ?>	
<?php foreach ($data as $index => $barisan_data) : ?>
<tr>
	<td><?php $no = $index+1; echo $no;?></td>
	<td><?php echo $barisan_data['nopendaftaran'];?></td>
	<td><?php echo $barisan_data['nosiswa'];?></td>
	<td><?php echo $barisan_data['tahunangkatan'];?></td>
	<td><?php echo $barisan_data['nmjurusan'];?></td>
	<td><?php echo $barisan_data['nama'];?></td>
	<td><?php echo $barisan_data['jkelamin'];?></td>
	<td><?php echo $barisan_data['agama'];?></td>
	<td><?php echo $barisan_data['gdarah'];?></td>
	<td><?php echo $barisan_data['telepon'];?></td>
	<td><?php echo $barisan_data['email'];?></td>
	<td><?php echo $barisan_data['alamat'];?></td>
	<td><?php echo $barisan_data['tgllahir'];?></td>
	<td><?php echo $barisan_data['tmptlahir'];?></td>
	<td><?php echo $barisan_data['namaayah'];?></td>
	<td><?php echo $barisan_data['pekerjaanayah'];?></td>
	<td><?php echo $barisan_data['namaibu'];?></td>
	<td><?php echo $barisan_data['pekerjaanibu'];?></td>
	<td><?php echo $barisan_data['sekolahasal'];?></td>
</tr>
<?php endforeach ?>
<?php endif ?>
  </table>
<tr>
<td width="115"><form id="form1" name="form1" method="post" action="home.php">
<label></label>
<input type="submit" name="Submit3" value="Kembali ke home" />
</form></td>
</tr>
<form name="form2" method="post" action="daftarsiswa.php">
  <input type="submit" name="Submit32" value="Daftar Lagi" />
</form>
</body>
