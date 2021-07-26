<?php
	include('C:\xampp\htdocs\kai\login\session.php');
	
	$boking=$_POST['kdboking'];
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	
	$boking = stripslashes($boking);
	$boking = mysql_real_escape_string($boking);
	$sql = "SELECT * FROM `pemesanan` WHERE kode_pesan='$boking'";
	
	$query = mysql_query("SELECT * FROM `pemesanan` WHERE kode_pesan='$boking'", $koneksi);
	$rows = mysql_num_rows($query);
	if ($rows == 1) {
		
		mysql_select_db('tiket_kai');
		$ambildata = mysql_query( $sql, $koneksi);
		while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
		{
			$nama="{$row['nama']}";
			$telp="{$row['telepon']}";
			$id="{$row['no_id']}";
			$naka="{$row['nama_ka']}";
			$kelas="{$row['kelas']}";
			$dari="{$row['sta_awal']}";
			$ke="{$row['sta_tuju']}";
			$gerbong="{$row['gerbong']}";
			$kursi="{$row['no_kursi']}";
			$status="{$row['aktif']}";
		}
		if(! $ambildata )
		{
			die('Gagal ambil data: ' . mysql_error());
		}
	} else {
		header("location: tidak-ada.php");
	}
	mysql_close($koneksi);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<title>Cek Kode</title>
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
							<h2>Berikut data tiket anda</h2>
						</legend>
						<tr>
							<td><h2>Nama</h2></td>
							<td> : </td>
							<td><h3><?php echo $nama ?></h3></td>
						</tr>
						<tr>
							<td><h2>Telepon</h2></td>
							<td> : </td>
							<td><h3><?php echo $telp ?></h3></td>
						</tr>
						<tr>
							<td><h2>No ID<h2></td>
							<td> : </td>
							<td><h3><?php echo $id ?></h3></td>
						</tr>
						<tr>
							<td><h2>Nama KA</h2></td>
							<td> : </td>
							<td><h3><?php echo $naka ?></h3></td>
						</tr>
						<tr>
							<td><h2>Kelas</h2></td>
							<td> : </td>
							<td><h3><?php echo $kelas ?></h3></td>
						</tr>
						<tr>
							<td><h2>Koridor</h2></td>
							<td> : </td>
							<td><h3><?php echo $dari ?> Ke <?php echo $ke ?></h3></td>
						</tr>
						<tr>
							<td><h2>Kursi</h2></td>
							<td> : </td>
							<td><h3>
							<?php
								if ($kelas == "Eksekutif")
								{
									echo "Eksekutif ",$gerbong;
								}
								else if ($kelas == "Bisnis")
								{
									echo "Bisnis ",$gerbong;
								}
								else
								{
									echo "K3 AC ",$gerbong;
								}
								?> / <?php echo $kursi; ?></h3></td>
							</h3></td>
						</tr>
						<tr>
							<td><h2>Status</h2></td>
							<td> : </td>
							<td><h3>
							<?php
							if ($status == 1)
								{
									echo "Aktif";
								}
							else
								{
									echo "Belum Aktif";
								} 
							?>
							</h3></td>
						</tr>
						<tr>
							<td>
							<a href="cek-kode.php"><input type="button" value="Cek Yang Lain" title="cek" id="submit"></a>
							</td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="Lain">
		Apabila Status tiket anda belum aktif, pastikan anda melakukan pembayaran
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
