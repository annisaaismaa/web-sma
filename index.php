<!DOCTYPE html>
<html>
<head>
	<title>SMK Bukit Asam</title>
     
	<link href="style_index2.css" rel="stylesheet">
<style>
#grad1 {
  height: 1400px;
  background: rgb(2,0,36);
  background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 21%, rgba(10,172,6,1) 51%, rgba(0,212,255,1) 100%); 
  background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 5%, rgba(134,73,66,1) 51%, rgba(18,149,176,1) 100%); /
    <style type="text/css">
<!--
.style5 {color: #FFFFFF}
.style8 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.style10 {color: #FFFFFF}
.style11 {color: #FFFFFF; font-weight: bold; }
.style13 {color: #000000}
.style14 {color: #000000; font-weight: bold; }
.style15 {font-size: 16}
.style16 {color: #00FFFF}
-->
    </style>
</head>
<body><div id="grad1">
		<table width="1000" height="940" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#996600">
		  <tr bgcolor="#66FF00">
		    <td height="195" colspan="3" bgcolor="#FF0000"><div align="left"><img src="images/home.jpeg" width="1037" height="197"></div></td>
		  </tr>
		  <tr bgcolor="#FF0000">
		    <td colspan="3" bgcolor="#FF0000"><strong> <span class="style13">
	        <span class="style16">
	        <span class="style13">
	        <marquee behavior="scroll">
            <span class="style15"> &quot;Selamat Datang di Website SMK Bukit Asam&quot;</span>
            </marquee>
	        </span>	        </span>		      </span> </strong></td>
		  </tr>
		  <tr bordercolor="#000000" bgcolor="#FF0000">
		    <td colspan="3" bgcolor="#FFFFFF">
			<nav>
			<ul>
			<li><a href="index.php?page=home" class="style11 style13">BERANDA</a></li>
            <li><a href="#" class="style14">PROFIL</a>
              <ul>
			<li><a href="index.php?page=sejarah">SEJARAH</a></li>
            <li><a href="index.php?page=visi">VISI/MISI</a></li>
			</ul></li>	
			
			<li><a href="#" class="style14">STRUKTUR</a>
			  <ul>
			<li><a href="index.php?page=struktur">STRUKTUR SEKOLAH</a></li>
            <li><a href="index.php?page=tugas">TUGAS DAN TANGGUNG JAWAB</a></li>
			</ul></li>	
			<li><a href="index.php?page=program" class="style14">PROGRAM KEAHLIAN</a></li>
			<li><a href="index.php?page=tambah_bukutamu" class="style14">BUKU TAMU</a></li>
			<li><a href="index.php?page=kontak" class="style14">KONTAK KAMI</a></li>
			<li><a href="index.php?page=pengumuman" class="style14">PENGUMUMAN</a></li>
			
			<li><a href="#" class="style14">INFORMASI</a>
			  <ul>
			<li><a href="index.php?page=syarat_daftar">INFORMASI PENDAFTARAN</a></li>
            <li><a href="index.php?page=tambah_daftar">FORM PENDAFTARAN</a></li>
			</ul></li>	
		
			
			<li><a href="login_admin.php" target="_blank" class="style14">LOGIN</a></li>
			</ul>
			</nav>			</td>
	      </tr>
		  <tr>
		    <td width="202" align="left" valign="top" bgcolor="#FFFFFF">
			<script language="javascript">
var win = null;
function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
}
</script>   
			<table width="200" border="0" align="center">
              <tr>
                <td bgcolor="#FF0000"><span class="style10 style5"><strong>LINK PENTING </strong></span></td>
              </tr>
              <tr>
                <td><a href="http://www.polsri.ac.id">Politeknik Negeri Sriwijaya</a></td>
              </tr>
              <tr>
                <td><a href="http://smkbukitasam.sch.id/">SMK Bukit Asam</a> </td>
              </tr>
              <tr>
                <td><a href="https://www.palembang.go.id/new/beranda">Pemkot Palembang</a> </td>
              </tr>
              <tr>
                <td><a href="https://www.sumselprov.go.id/">Provinsi Sumsel </a></td>
              </tr>
            </table>
			<br>
			<table width="200" border="0">
              <tr>
                <td bgcolor="#FF0000" class="style10 style5"><strong>POLING WEB </strong></td>
              </tr>
              <tr>
                <td>
				
				<?php
//melakukan koneksi ke database
include ('koneksi.php');



//mengambil data
$baca = mysql_query("SELECT * FROM polingweb");
$data = mysql_fetch_array($baca);

//nilai tiap opsi
$opsi1 = $data['sangat_baik'];
$opsi2 = $data['baik'];
$opsi3 = $data['cukup'];
$opsi4 = $data['kurang'];
$opsi5 = $data['pertanyaan'];
?>
<?php echo $opsi5; ?>
<form method="post" action="index.php?page=simpan_polweb">
	<table width="190" align="center">
    	
    	<tr><td width="20"><input type="radio" name="tanya" value="sangat_baik"/></td>
        	<td width="158">Sangat Baik</td>
        </tr>
        <tr><td><input type="radio" name="tanya" value="baik" /></td>
            <td>Baik</td>
        </tr>
        <tr><td><input type="radio" name="tanya" value="cukup" /></td>
            <td>Cukup</td>
        </tr>
        <tr><td><input type="radio" name="tanya" value="kurang" /></td>
            <td>Kurang</td>
       </tr>
        <tr>
          <td colspan="2"><input type="submit" name="Submit" value="Vote"></td>
          </tr>
        <tr>
          <td colspan="2"><a href="hasil_polweb.php" onClick="NewWindow(this.href,'name','400','300','yes');return false">Hasil Vote</a></td>
        </tr>
</table> 
</form> </td>
              </tr>
            </table>
			<br>
			<table width="200" border="0" align="center">
              <tr>
                <td width="212" bgcolor="#FF0000"><span class="style10 style5"><strong>JAM ANALOG </strong></span></td>
              </tr>
              <tr>
                <td>
				<style type="text/css">

	h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}

	.jam_analog {
		background: #e7f2f7;
		position: relative;
		width: 110px;
		height: 110px;
		border: 16px solid #53BD84;
		border-radius: 50%;
		padding: 20px;
		margin:20px auto;
	}

	.xxx {
		height: 100%;
		width: 100%;
		position: relative;
	}

	.jarum {
		position: absolute;
		width: 50%;
		background: #232323;
		top: 50%;
		transform: rotate(90deg);
		transform-origin: 100%;
		transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
	}

	.lingkaran_tengah {
		width: 24px;
		height: 24px;
		background: #232323;
		border: 4px solid #53BD84;
		position: absolute;
		top: 50%;
		left: 50%;
		margin-left: -14px;
		margin-top: -14px;
		border-radius: 50%;
	}

	.jarum_detik {
		height: 2px;
		border-radius: 1px;
		background: #F0C952;
	}

	.jarum_menit {
		height: 4px;
		border-radius: 4px;
	}

	.jarum_jam {
		height: 8px;
		border-radius: 4px;
		width: 35%;
		left: 15%;
	}
</style>



<div class="jam_analog">
	<div class="xxx">
		<div class="jarum jarum_detik"></div>
		<div class="jarum jarum_menit"></div>
		<div class="jarum jarum_jam"></div>
		<div class="lingkaran_tengah"></div>
	</div>
</div>






<script type="text/javascript">
	const secondHand = document.querySelector('.jarum_detik');
	const minuteHand = document.querySelector('.jarum_menit');
	const jarum_jam = document.querySelector('.jarum_jam');

	function setDate(){
		const now = new Date();

		const seconds = now.getSeconds();
		const secondsDegrees = ((seconds / 60) * 360) + 90;
		secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
		if (secondsDegrees === 90) {
			secondHand.style.transition = 'none';
		} else if (secondsDegrees >= 91) {
			secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
		}

		const minutes = now.getMinutes();
		const minutesDegrees = ((minutes / 60) * 360) + 90;
		minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

		const hours = now.getHours();
		const hoursDegrees = ((hours / 12) * 360) + 90;
		jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
	}

	setInterval(setDate, 1000)
</script>				</td>
              </tr>
            </table>
			<div align="center"><br>
	        </div></td>
		    <td width="623" valign="top" bgcolor="#FFFFFF">
			<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'sejarah':
				include "halaman/sejarah.php";
				break;
			case 'visi':
				include "halaman/visi.php";
				break;			
			case 'logo':
				include "halaman/logo.php";
				break;	
			case 'izin':
				include "halaman/izin.php";
				break;
			
			case 'tampil_siswa':
				include "siswa/tampil_siswa.php";
				break;
			case 'crsiswa':
				include "siswa/cari_siswa.php";
				break;
			
			case 'tampil_guru':
				include "guru/tampil_guru.php";
				break;
			case 'crguru':
				include "guru/cari_guru.php";
				break;
			
			case 'struktur':
				include "halaman/struktur.php";
				break;
			case 'tugas':
				include "halaman/tugas.php";
				break;
			case 'program':
				include "program_keahlian/program.php";
				break;
			case 'tambah_bukutamu':
				include "bukutamu/tambah_bukutamu.php";
				break;
			case 'simpan_bukutamu':
				include "bukutamu/simpan_bukutamu.php";
				break;
			case 'kontak':
				include "halaman/kontak.php";
				break;
			case 'simpan_polweb':
				include "simpan_polweb.php";
				break;
			case 'hasil_polweb':
				include "hasil_polweb.php";
				break;
			case 'simpan_polpel':
				include "simpan_polpel.php";
				break;
			case 'hasil_polpel':
				include "hasil_polpel.php";
				break;
			case 'syarat_daftar':
				include "daftar/syarat_daftar.php";
				break;
			case 'tambah_daftar':
				include "daftar/tambah_daftar.php";
				break;
			case 'simpan_daftar':
				include "daftar/simpan_daftar.php";
				break;
			case 'cetak_daftar':
				include "daftar/cetak_daftar2.php";
				break;
			case 'pengumuman':
				include "pengumuman/pengumuman.php";
				break;
		
			default:
				echo "<center>Maaf. Halaman tidak di temukan !</center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}

	 ?></td>
		    <td width="200" valign="top" bgcolor="#FFFFFF"><table width="200" border="0" align="center">
              <tr>
                <td bgcolor="#FF0000"><span class="style10 style5"><strong>LOGO SEKOLAH </strong></span></td>
              </tr>
              <tr>
                <td><div align="center"><img src="images/logo.jpg" width="170" height="190"></div></td>
              </tr>
            </table>
	        <br>
	        <table width="200" border="0" align="center">
              <tr>
                <td bgcolor="#FF0000" class="style5"><span class="style10"><strong>POLING PELAYANAN </strong></span></td>
              </tr>
              <tr>
                <td><?php
//melakukan koneksi ke database
include ('koneksi.php');



//mengambil data
$baca = mysql_query("SELECT * FROM polingpelayanan");
$data = mysql_fetch_array($baca);

//nilai tiap opsi
$opsi1 = $data['smemuaskan'];
$opsi2 = $data['memuaskan'];
$opsi3 = $data['cmemuaskan'];
$opsi4 = $data['kmemuaskan'];
$opsi5 = $data['pertanyaan'];
?>
                    <?php echo $opsi5; ?>
                    <form method="post" action="index.php?page=simpan_polpel">
                      <table width="190" align="center">
                        <tr>
                          <td width="20"><input type="radio" name="tanya" value="smemuaskan"/></td>
                          <td width="158">Sangat Memuaskan</td>
                        </tr>
                        <tr>
                          <td><input type="radio" name="tanya" value="memuaskan" /></td>
                          <td>Memuaskan</td>
                        </tr>
                        <tr>
                          <td><input type="radio" name="tanya" value="cmemuaskan" /></td>
                          <td>Cukup Memuaskan</td>
                        </tr>
                        <tr>
                          <td><input type="radio" name="tanya" value="kmemuaskan" /></td>
                          <td>Kurang Memuaskan</td>
                        </tr>
                        <tr>
                          <td colspan="2"><input type="submit" name="Submit" value="Vote"></td>
                        </tr>
                        <tr>
                          <td colspan="2"><a href="hasil_polpel.php" onClick="NewWindow(this.href,'name','400','300','yes');return false">Hasil Vote</a></td>
                        </tr>
                      </table>
                  </form></td>
              </tr>
            </table>
	        <br>
	        <table width="200" border="0" align="center">
              <tr>
                <td bgcolor="#FF0000"><span class="style10 style5"><strong>KALENDER</strong></span></td>
              </tr>
              <tr>
                <td><script language="JavaScript">


var ns6=document.getElementById&&!document.all
var ie4=document.all

var Selected_Month;
var Selected_Year;
var Current_Date = new Date();
var Current_Month = Current_Date.getMonth();

var Days_in_Month = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
var Month_Label = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

var Current_Year = Current_Date.getYear();
if (Current_Year < 1000)
Current_Year+=1900


var Today = Current_Date.getDate();

function Header(Year, Month) {

   if (Month == 1) {
   Days_in_Month[1] = ((Year % 400 == 0) || ((Year % 4 == 0) && (Year % 100 !=0))) ? 29 : 28;
   }
   var Header_String = Month_Label[Month] + ' ' + Year;
   return Header_String;
}



function Make_Calendar(Year, Month) {
   var First_Date = new Date(Year, Month, 1);
   var Heading = Header(Year, Month);
   var First_Day = First_Date.getDay() + 1;
   if (((Days_in_Month[Month] == 31) && (First_Day >= 6)) ||
       ((Days_in_Month[Month] == 30) && (First_Day == 7))) {
      var Rows = 6;
   }
   else if ((Days_in_Month[Month] == 28) && (First_Day == 1)) {
      var Rows = 4;
   }
   else {
      var Rows = 5;
   }

   var HTML_String = '<table><tr><td valign="top"><table BORDER=4 CELLSPACING=0 cellpadding=2 FRAME="box" BGCOLOR="C0C0C0" BORDERCOLORLIGHT="808080">';

   HTML_String += '<tr><th colspan=7 BGCOLOR="FFFFFF" BORDERCOLOR="000000">' + Heading + '</font></th></tr>';

   HTML_String += '<tr><th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">M</th><th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">S</th><th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">S</th><th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">R</th>';

   HTML_String += '<th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">K</th><th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">J</th><th ALIGN="CENTER" BGCOLOR="FFFFFF" BORDERCOLOR="000000">S</th></tr>';

   var Day_Counter = 1;
   var Loop_Counter = 1;
   for (var j = 1; j <= Rows; j++) {
      HTML_String += '<tr ALIGN="left" VALIGN="top">';
      for (var i = 1; i < 8; i++) {
         if ((Loop_Counter >= First_Day) && (Day_Counter <= Days_in_Month[Month])) {
            if ((Day_Counter == Today) && (Year == Current_Year) && (Month == Current_Month)) {
               HTML_String += '<td BGCOLOR="FFFFFF" BORDERCOLOR="000000"><strong><font color="red">' + Day_Counter + '</font></strong></td>';
            }
            else {
               HTML_String += '<td BGCOLOR="FFFFFF" BORDERCOLOR="000000">' + Day_Counter + '</td>';
            }
            Day_Counter++;   
         }
         else {
            HTML_String += '<td BORDERCOLOR="C0C0C0"> </td>';
         }
         Loop_Counter++;
      }
      HTML_String += '</tr>';
   }
   HTML_String += '</table></td></tr></table>';
   cross_el=ns6? document.getElementById("Calendar") : document.all.Calendar
   cross_el.innerHTML = HTML_String;
}


function Check_Nums() {
   if ((event.keyCode < 48) || (event.keyCode > 57)) {
      return false;
   }
}



function On_Year() {
   var Year = document.when.year.value;
   if (Year.length == 4) {
      Selected_Month = document.when.month.selectedIndex;
      Selected_Year = Year;
      Make_Calendar(Selected_Year, Selected_Month);
   }
}

function On_Month() {
   var Year = document.when.year.value;
   if (Year.length == 4) {
      Selected_Month = document.when.month.selectedIndex;
      Selected_Year = Year;
      Make_Calendar(Selected_Year, Selected_Month);
   }
   else {
      alert('Please enter a valid year.');
      document.when.year.focus();
   }
}


function Defaults() {
   if (!ie4&&!ns6)
   return
   var Mid_Screen = Math.round(document.body.clientWidth / 2);
   document.when.month.selectedIndex = Current_Month;
   document.when.year.value = Current_Year;
   Selected_Month = Current_Month;
   Selected_Year = Current_Year;
   Make_Calendar(Current_Year, Current_Month);
}


function Skip(Direction) {
   if (Direction == '+') {
      if (Selected_Month == 11) {
         Selected_Month = 0;
         Selected_Year++;
      }
      else {
         Selected_Month++;
      }
   }
   else {
      if (Selected_Month == 0) {
         Selected_Month = 11;
         Selected_Year--;
      }
      else {
         Selected_Month--;
      }
   }
   Make_Calendar(Selected_Year, Selected_Month);
   document.when.month.selectedIndex = Selected_Month;
   document.when.year.value = Selected_Year;
}

</script>
<div id=NavBar style="position:relative;width:190px;top:5px;" align="left">
<form name="when"><table width="190">
<tr>
  
   <td> </td>
   <td><select name="month" onChange="On_Month()">

<script language="JavaScript1.2">
if (ie4||ns6){
   for (j=0;j<Month_Label.length;j++) {
      document.writeln('<option value=' + j + '>' + Month_Label[j]);
   }
}
</script>

       </select>   </td>
   <td><input type="hidden" name="year" size=4 maxlength=4 onKeyPress="return Check_Nums()" onKeyUp="On_Year()"></td>
   <td> </td>
   <td><input type="button" value="Next" onClick="Skip('+')"></td>
</tr></table></form></div>
<div id=Calendar style="position:relative;width:190px;top:-2px;" align="left"></div>
<body onLoad="Defaults()"></td>
              </tr>
            </table>
	        <br>
	        <div align="center"></div></td>
	      </tr>
		  <tr bordercolor="#000000" bgcolor="#FF0000">
		    <td colspan="3"><div align="center">
		      <p class="style8">Copyright@2019<br>
		        Desain By 3CC)<br>
		        <font size="2" face="Georgia, Times New Roman, Times, serif">Sekolah Menengah Kejuruan Bukit Asam</font><br>
		        <span class="style8 style1">Jalan Buluran Atas, Talang Jawa, Tanjung Enim, 31716, Sumatera Selatan, Indonesia</span><br>
	            Web : <a href="http://smkbukitasam.sch.id/">http://smkbukitasam.sch.id/</a></p>
	        </div></td>
	      </tr>
</table>
		


</div>
	
</body>
</html>