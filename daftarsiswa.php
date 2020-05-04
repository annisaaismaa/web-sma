<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
	<style>
		*{font-family:Arial, Helvetica, sans-serif;}
		td{padding:10px;}
		table{align:center;}
	</style>
</head>
<body>
<?php 
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'psbdb';

$db = mysqli_connect($server, $user, $pass, $database);
$sql = "SELECT * FROM jurusan ORDER BY idjurusan";
$result = mysqli_query($db, $sql);
?>	
<form id="form1" name="form1" method="post" action="daftarsiswasave.php">
  <table width="654" border="0" cellspacing="0" align="center">
    <tr>
      <th colspan="3" scope="row"><div align="center"><strong>FORM PENDAFTARAN SISWA </strong></div></th>
    </tr>
    <tr>
      <th width="157" scope="row"><div align="left">Nomor Siswa </div></th>
      <td width="10">:</td>
      <td width="465"><label>
        <input name="nosiswa" type="text" id="nosiswa" size="75" maxlength="6" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Tahun Angkatan </div></th>
      <td>:</td>
      <td><label>
        <input name="tahunangkatan" type="text" id="tahunangkatan" size="75" maxlength="4" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">ID Jurusan </div></th>
      <td>:</td>
      <td><label>
        <select name="idjurusan" id="idjurusan">
		<option value ="BLANK" selected="selected">....</option>
		<?php
    		while ($row = mysqli_fetch_array($result)) {
        	echo "<option value='" . $row['idjurusan'] . "'>" . $row['idjurusan'] . "</option>";
    		}
			?>
        </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Nama</div></th>
      <td>:</td>
      <td><label>
        <input name="nama" type="text" id="nama" size="75" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Jenis Kelamin </div></th>
      <td>:</td>
      <td><label>
      <select name="jkelamin" id="jkelamin">
        <option value="P">P</option>
        <option value="L">L</option>
      </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Agama</div></th>
      <td>:</td>
      <td><label>
        <select name="agama" id="agama">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Golongan Darah </div></th>
      <td>:</td>
      <td><label>
      <select name="gdarah" id="gdarah">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O">O</option>
      </select>
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Telepon</div></th>
      <td>:</td>
      <td><label>
        <input name="telepon" type="text" id="telepon" size="75" maxlength="25" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Email</div></th>
      <td>:</td>
      <td><label>
        <input name="email" type="text" id="email" size="75" maxlength="50" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Alamat</div></th>
      <td>:</td>
      <td><label>
        <input name="alamat" type="text" id="alamat" size="75" maxlength="50" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Tanggal Lahir </div></th>
      <td>:</td>
      <td><label>
        <input name="tgllahir" type="text" id="tgllahir" size="75" maxlength="8" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Tempat Lahir </div></th>
      <td>:</td>
      <td><label>
        <input name="tmptlahir" type="text" id="tmptlahir" size="75" maxlength="50" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Nama Ayah </div></th>
      <td>:</td>
      <td><label>
        <input name="namaayah" type="text" id="namaayah" size="75" maxlength="30" />
      </label>
      <label></label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Pekerjaan Ayah </div></th>
      <td>:</td>
      <td><label>
        <input name="pekerjaanayah" type="text" id="pekerjaanayah" size="75" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Nama Ibu </div></th>
      <td>:</td>
      <td><label>
        <input name="namaibu" type="text" id="namaibu" size="75" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Pekerjaan Ibu </div></th>
      <td>:</td>
      <td><label>
        <input name="pekerjaanibu" type="text" id="pekerjaanibu" size="75" maxlength="30" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Sekolah Asal </div></th>
      <td>:</td>
      <td><label>
        <input name="sekolahasal" type="text" id="sekolahasal" size="75" maxlength="50" />
      </label></td>
    </tr>

    <tr>
      <th colspan="3" scope="row"><label>
        <input type="reset" name="Reset" value="Batal" />
        <input type="submit" name="Submit" value="Simpan" />
      </label></th>
    </tr>
  </table>
</form>
</body>
</html>
