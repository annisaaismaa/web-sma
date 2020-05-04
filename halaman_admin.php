<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login_admin.php?pesan=gagal");
	}

	?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard Administrator</title>
	
	
<style type="text/css">
<!--
.style8 {	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>
<body>

<table width="1003" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#996600">
  <tr bgcolor="#FFFF99">
    <td height="202" colspan="2" valign="top" bgcolor="#FFFFFF"><img src="images/haladmin.jpeg" width="1000" height="200"></td>
  </tr>
  <tr bgcolor="#FFFF99">
    <td colspan="2" valign="top" bgcolor="#FF6666"><font color="#FFFFFF" size="2" face="Georgia, Times New Roman, Times, serif"><strong>Username Anda :</strong> <?php echo $_SESSION['username']; ?></font></td>
  </tr>
  <tr>
    <td width="200" valign="top"><table width="200" border="1" cellpadding="2" cellspacing="0" bordercolor="#996600">
      <tr>
        <td bgcolor="#FF6666"><font color="#FFFFFF" size="3" face="Geneva, Arial, Helvetica, sans-serif"><a href="halaman_admin.php?page=home">Home</a></font></td>
      </tr>
      <tr>
        <td bgcolor="#FF6666"><font color="#FFFFFF" size="3" face="Geneva, Arial, Helvetica, sans-serif"><a href="halaman_admin.php?page=tabel_daftar">Kelola Data Pendaftaran</a></font></td>
      </tr>
      <tr>
        <td bgcolor="#FF6666"><font color="#FFFFFF" size="3" face="Geneva, Arial, Helvetica, sans-serif"><a href="halaman_admin.php?page=jurusantampil">Jurusan</a> </font></td>
      </tr>
      <tr>
        <td bgcolor="#FF6666"><font color="#FFFFFF" size="3" face="Geneva, Arial, Helvetica, sans-serif"><a href="halaman_admin.php?page=tabel_admin">Kelola Admin </a></font></td>
      </tr>
      <tr>
        <td bgcolor="#FF6666"><font color="#FFFFFF" size="3" face="Geneva, Arial, Helvetica, sans-serif"><a href="logout.php" onClick="return confirm('Apakah anda yakin ingin keluar ?')">LogOut</a></font></td>
      </tr>
      <tr>
        <td bgcolor="#FF6666"><font color="#FFFFFF" size="3" face="Geneva, Arial, Helvetica, sans-serif">&nbsp;</font></td>
      </tr>
    </table></td>
    <td width="789" valign="top"><?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case 'home': 
				include "beranda.php";
				break;
			
			case 'tabel_beranda': 	include "beranda/tabel_beranda.php"; 	break;
			case 'tambah_beranda': 	include "beranda/tambah_beranda.php"; 	break;
			case 'simpan_beranda': 	include "beranda/simpan_beranda.php"; 	break;
			
			
			case 'tabel_galeri': 	include "galeri/tabel_galeri.php"; 		break;
			case 'tambah_galeri': 	include "galeri/tambah_galeri.php"; 	break;
			case 'simpan_galeri': 	include "galeri/simpan_galeri.php"; 	break;
			
			case 'tabel_daftar': 	include "daftar/tabel_daftar.php"; 		break;
			case 'tambah_siswa': 	include "siswa/tambah_siswa.php"; 		break;
			case 'simpan_siswa': 	include "siswa/simpan_siswa.php"; 		break;
			
			case 'jurusan': 		include "jurusan/jurusantampil.php"; 		break;
			case 'jurusan': 		include "jurusan/jurusantampil.php"; 		break;
			case 'jurusantambah': 	include "jurusan/jurusantambah.php"; 		break;
			case 'jurusantambahsave': include "jurusan/jurusantambahsave.php"; 		break;
			
			case 'tabel_alumni': 	include "alumni/tabel_alumni.php"; 		break;
			case 'tambah_alumni': 	include "alumni/tambah_alumni.php"; 		break;
			case 'tambah_alumni': 	include "alumni/tambah_alumni.php"; 		break;
			case 'simpan_alumni': 	include "alumni/simpan_alumni.php"; 		break;
			case 'cari_alumni': 	include "alumni/cari_alumni.php"; 		break;
			
			case 'tabel_bukutamu': 	include "bukutamu/tabel_bukutamu.php"; 		break;
			
			case 'tabel_polweb': 	include "poling/tabel_polweb.php"; 		break;
			case 'tabel_admin': 	include "admin/tabel_admin.php"; 		break;
			case 'tambah_admin': 	include "admin/tambah_admin.php"; 		break;
			case 'simpan_admin': 	include "admin/simpan_admin.php"; 		break;
			
            case 'jurusan': 		include "jurusan/jurusantampil.php"; 		break;
			case 'jurusantampil': 	include "jurusan/jurusantampil.php"; 		break;
			case 'jurusantambah': 	include "jurusan/jurusantambah.php"; 		break;
			case 'jurusantambahsave': include "jurusan/jurusantambahsave.php"; 		break;
			
			case 'nilai': 			include "pendaftarannilai/nilai.php"; 		break;
			case 'nilaitampil': 	include "pendaftarannilai/nilaitampil.php"; 		break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "beranda.php";
	}

	 ?></td>
  </tr>
  

</body>
</html>