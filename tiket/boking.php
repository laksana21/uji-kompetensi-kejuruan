<?php
	
	function rand_string( $length ) {
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";	

	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
	}
	
	function rand_gerbong( $length ) {
	$chars = "123456789";	

	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
	}
	
	function bang_str( $length ) {
	$chars = "ABCD";	

	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
	}
	
	function bang_num1( $length ) {
	$chars = "12";	

	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
	}
	
	function bang_num2( $length ) {
	$chars = "123456789";	

	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
	}
	
	$boking=rand_string(15);
	$gerbong=rand_gerbong(1);
	$bangstr=bang_str(1);
	$bangnumi=bang_num1(1);
	$bangnums=bang_num2(1);
	$nma=$_POST['nama'];
	$noid=$_POST['noid'];
	$telp=$_POST['telp'];
	$noka=$_POST['noka'];
	$asal=$_POST['dari'];
	$tuju=$_POST['ke'];
	$tanggal=$_POST['tanggal'];
	
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
        <li><a href="/kai/index.html">Home</a></li>
        <li><a href="/kai/styles.html">Sejarah PT. KAI</a></li>
        <li><a href="/kai/notes.html">Notes</a> </li>
		<li class="active"><a href="/kai/tiket/pesan-tiket.php">Tiket</a> </li>
		<li><a href="/kai/hubungi-kami/index.php">Kontak</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/index.php">Login</a><span class="desc">Masuk sebagai tamu</span></h1>
  </div>
<div id="center">
		<div class="contactform">
			<form action="kirim.php" method="post">
				<fieldset>
					<table>
						<legend>
							<h2>Terima kasih. Pemesanan anda telah dibuat.</h2>
						</legend>
						<tr>
							<td colspan="4"><h2>KA</h2></td>
							<td> : </td>
							<td><h3><?php echo $noka ?> <?php echo $naka ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Kelas<h2></td>
							<td> : </td>
							<td><h3><?php echo $kelas ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Koridor</h2></td>
							<td> : </td>
							<td><h3><?php echo $asal ?> - <?php echo $tuju ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Tanggal</h2></td>
							<td> : </td>
							<td><h3><?php echo $tanggal ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Harga</h2></td>
							<td> : </td>
							<td><h3>Rp.<?php echo $harga ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Kursi</h2></td>
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
								?> / <?php echo $bangstr,$bangnumi,$bangnums; ?></h3></td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="contactform">
			<form action="kirim.php" method="GET">
				<fieldset>
					<table>
						<legend>
							<h2>Data pemesan.</h3>
						</legend>
						<tr>
							<td colspan="4"><h2>Nama</h2></td>
							<td> : </td>
							<td><h3><?php echo $nma ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Nomor ID</h2></td>
							<td> : </td>
							<td><h3><?php echo $noid ?></h3></td>
						</tr>
						<tr>
							<td colspan="4"><h2>Telepon</h2></td>
							<td> : </td>
							<td><h3><?php echo $telp ?></h3></td>
						</tr>
						<tr>
							<td>
							<?php
							$nama=['nama'];
							$id=['noid'];
							echo "<a href='kirim.php?nama=$nma&telp=$telp&naka=$naka&kelas=$kelas&no=$noka&dari=$asal&ke=$tuju&tanggal=$tanggal&kode=$boking&gerbong=$gerbong&kursi=$bangstr$bangnumi$bangnums&noid=$noid'><input name='Submit' type='button' id='Submit' class='button' value='Submit' /></a>"
							
							?>
							</td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="Lain">
		Kode booking anda:
		</div>
		<div class="Lain">
			<h2>
				<?php echo $boking ?>
			</h2>
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
