<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
<form id="form1" name="form1" method="post" action="jurusansave.php">
  <table width="448" border="1">
    <tr>
      <th colspan="3" scope="row"><strong>DATA JURUSAN</strong></th>
    </tr>
    <tr>
      <th width="109" scope="row"><div align="left">ID Jurusan </div></th>
      <td width="9">:</td>
      <td width="308"><label>
        <input name="idjurusan" type="text" id="idjurusan" size="50" maxlength="4" />
      </label></td>
    </tr>
    <tr>
      <th scope="row"><div align="left">Nama Jurusan </div></th>
      <td>:</td>
      <td><label>
        <input name="nmjurusan" type="text" id="nmjurusan" size="50" maxlength="60" />
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
