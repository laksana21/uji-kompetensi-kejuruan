<?php
	include('C:\xampp\htdocs\kai\login\session.php');
	
	$noka=$_GET['no'];
	$asal=$_GET['dari'];
	$tuju=$_GET['ke'];
	$tanggal=$_GET['tanggal'];
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	
	$noka = stripslashes($noka);
	$noka = mysql_real_escape_string($noka);
	$sql = "SELECT * FROM `kereta` WHERE no_ka='$noka'";
 
	mysql_select_db('tiket_kai');
	$ambildata = mysql_query( $sql, $koneksi);
	while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
	{
		$nomor="{$row['no_ka']}";
		$naka="{$row['nama_ka']}";
		$kelas="{$row['kelas']}";
		$harga="{$row['harga']}";
	}
	if(! $ambildata )
	{
		die('Gagal ambil data: ' . mysql_error());
	}
	mysql_close($koneksi);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<title>PT. Kereta Api Indonesia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
			#center{
				width: 90%;
				margin: 30px auto;
			}
			.Kontak{
				width:700px;
				height: 20% ;
				background-color:#FFFFFF;
				text-align:left ;
			} 
			.Lain{
				font-size:15px;
				color:black;
				text-align:center;
				font-weight:bold;
			} 
		</style>
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="topmenu">
      <ul>
        <li><a href="/kai/landing-page/index.php">Home</a></li>
        <li><a href="/kai/landing-page/styles.php">Sejarah PT. KAI</a></li>
        <li><a href="/kai/landing-page/notes.php">Notes</a> </li>
		<li class="active"><a href="/kai/landing-page/tiket/pesan-tiket.php">Tiket</a> </li>
		<li><a href="/kai/landing-page/hubungi-kami/index.php">Kontak</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?></span></h1>
  </div>
<div id="center">
		<div class="contactform">
			<form action="boking.php" method="post">
				<fieldset>
					<table>
						<legend>
							<h2>Lengkapi data berikut!</h2>
						</legend>
						<tr>
							<td colspan="4"><h2>Nama</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $login_session; ?>" name="nama" id="nama" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Nomor ID</h2></td>
							<td> : </td>
							<td><input class="textfield" placeholder="No SIM, KTP, Kartu Pelajar, dll" name="noid" id="noid" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Telepon</h2></td>
							<td> : </td>
							<td><input class="textfield" placeholder="Nomor telepon yang dapat dihubungi" name="telp" id="telp" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>No. KA</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $noka ?>" name="noka" id="noka" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Nama KA</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $naka ?>" name="naka" id="naka" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Kelas<h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $kelas ?>" name="kelas" id="kelas" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Dari</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $asal ?>" name="dari" id="dari" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Ke</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $tuju ?>" name="ke" id="ke" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Tanggal</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $tanggal ?>" name="tanggal" id="tanggal" type="text" /></td>
							<td><h3></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Harga</h2></td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $harga ?>" name="harga" id="harga" type="text" /></td>
						</tr>
						<tr>
							<td>
								<input name='Submit' type='submit' id='Submit' class='button' value='Submit' /></a>
							</td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="Lain">
		Masukkan hanya ID dan Nomor Telepon anda guna keperluan boarding di stasiun.
		</div>
  <div class="clear"> </div>
  <div id="footer">
    <div id="btm_cont"> </div>
    <div id="ft_btm"> Copyright &copy; YourSiteName.com | <a href="#">Some</a> <a href="#">Links</a> <a href="#">Goes</a> <a href="#">Here</a><br />
      <!--Credits -->
      <a href="http://ramblingsoul.com">CSS Template</a> by Rambling Soul<br />
      Images from<a href="http://sxc.hu"> sxc.hu</a>
      <!--/Credits -->
    </div>
  </div>
</div>
</body>
</html>
