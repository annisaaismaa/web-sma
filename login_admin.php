<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Administrator</title>

  
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #FFFFFF; font-family: Georgia, "Times New Roman", Times, serif; }
.style8 {color: #000000; font-family: Georgia, "Times New Roman", Times, serif; }
.style9 {color: #000000}
-->
    </style>
</head>
<body>
 
	<font face="Georgia, Times New Roman, Times, serif" size="2"><table width="1000" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#996600">
      <tr bgcolor="#FFFF99">
        <td height="203" valign="top" background="images/admin2.jpg" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr bgcolor="#FF0000">
        <td valign="top" bgcolor="#00CC66"><div align="center"><span class="style7 style1"><span class="style9">Selamat Datang di Website S<font size="2" face="Georgia, Times New Roman, Times, serif">MK Bukit Asam</font></span> <span class="style9">Palembang</span></span></div></td>
      </tr>
      <tr>
        <td width="1000" valign="top">


	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
    <br>
    <br>
    <br> 
	
		
 
		<form action="cek_login.php" method="post">
			          
		    <table width="500" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#FF0000" bgcolor="#00FF00">
              <tr>
                <td><table width="500" border="0" align="center">
                  <tr>
                    <td width="103" >&nbsp;</td>
                    <td height="44" colspan="3" ><font size="4" face="Georgia, Times New Roman, Times, serif">Login Admin </font></td>
                  </tr>
                  <tr>
                    <td >&nbsp;</td>
                    <td width="114" height="35" ><font size="4" face="Georgia, Times New Roman, Times, serif">Username</font></td>
                    <td width="9" ><div align="center">:</div></td>
                    <td width="256" ><input type="text" name="username"  placeholder="Username .." required="required"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height="34"><font size="4" face="Georgia, Times New Roman, Times, serif">Password</font></td>
                    <td><div align="center">:</div></td>
                    <td><input type="password" name="password" placeholder="Password .." required="required"></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td height="37">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><input type="submit" class="tombol_login" value="LOGIN"></td>
                  </tr>
                </table></td>
              </tr>
          </table>
		</form>
		<br>
		<br>
		<br>
		<br>
	</td>
      </tr>
      <tr bgcolor="#53BD84">
        <td valign="top" bordercolor="#FF0000" bgcolor="#00CC66"><div align="center" class="style2"><span class="style8 style1">Copyright@2019<br>
 Desain by 3CC<br>
        </span><span class="style9"><font size="2" face="Georgia, Times New Roman, Times, serif">Sekolah Menengah Kejuruan Bukit Asam </font></span><span class="style8 style1">
 <br>
 Jalan Buluran Atas, Talang Jawa, Tanjung Enim, 31716, Sumatera Selatan, Indonesia<br>
 Web : <a href="http://smkbukitasam.sch.id/">http://smkbukitasam.sch.id/</a></span></div></td>
      </tr>
	</table>
	<table width="1000" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#996600">
	  <tr bgcolor="#53BD84">      </tr>
	</table>
	<table width="1000" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#996600">
    </table>
	</font>

	
 
</body>
</html>