<?php
	include('C:\xampp\htdocs\kai\login\session.php');
	
	$noka=$_GET['noka'];
	$asal=$_GET['asal'];
	$tuju=$_GET['tuju'];
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
			<form action="lengkap.php" method="GET">
				<fieldset>
					<table>
						<legend>
							<h2>Pastikan data ini sudah benar</h2>
						</legend>
						<tr>
							<td colspan="4"><h2>No KA</h2></td>
							<td> : </td>
							<td><h3><?php echo $noka ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Nama KA</h2></td>
							<td> : </td>
							<td><h3><?php echo $naka ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Kelas<h2></td>
							<td> : </td>
							<td><h3><?php echo $kelas ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Dari</h2></td>
							<td> : </td>
							<td><h3><?php echo $asal ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Tujuan</h2></td>
							<td> : </td>
							<td><h3><?php echo $tuju ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Harga</h2></td>
							<td> : </td>
							<td><h3>Rp.<?php echo $harga ?></h3></td>
						</tr>
						<tr>
							<td>
							<?php
							echo "<a href='lengkap.php?no=$noka&dari=$asal&ke=$tuju&tanggal=$tanggal'><input name='Submit' type='button' id='Submit' class='button' value='Submit' /></a>
								<a href='pesan-tiket.php'><input name='Reset' type='button' id='Reset' class='button' value='Ulangi' /></a>"
							
							?>
							</td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="Lain">
		Apabila data belum benar, anda dapat mengulangi pencarian.
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
