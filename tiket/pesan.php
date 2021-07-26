<?php
	$asal=$_POST['stasal'];
	$tuju=$_POST['sttuju'];
	$tanggal=$_POST['tanggal'];
	
	if (!empty($asal)){
		if (!empty($tuju)){
			if (!empty($tanggal)){
				if ($asal == $tuju){
					$error =  "Stasiun tidak boleh sama!";
				}
				else
				{
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = '';
					$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
					if(! $koneksi )
					{
						die('Gagal Koneksi: ' . mysql_error());
					}
					$asal = stripslashes($asal);
					$tuju = stripslashes($tuju);
					$asal = mysql_real_escape_string($asal);
					$tuju = mysql_real_escape_string($tuju);
					$sql = "SELECT * FROM `kereta` WHERE `stasiun` LIKE '%$asal%' AND `stasiun` LIKE '%$tuju%'";

					mysql_select_db('tiket_kai');
					$ambildata = mysql_query( $sql, $koneksi);
					if(! $ambildata )
					{
						die('Gagal ambil data: ' . mysql_error());
					}
					mysql_close($koneksi);
				}
			}else{
				$error =  "Anda belum mengisi tanggal";
			}
		}else{
			$error = "Anda belum mengisikan stasiun tujuan";
		}
	}else{
		$error = "Anda belum mengisi stasiun asal";
	}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pesan Tiket</title>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
			#center{
				width: 90%;
				margin: 30px auto;
			}
			.Biodata{
				width:700px;
				height:20% ;
				background-color:#FFFFFF;
				text-align:left ;
			} 
			.Staff{
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
		<li class="active"><a href="#">Tiket</a></li>
		<li><a href="/kai/hubungi-kami/index.php">Kontak</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/index.php">Login</a><span class="desc">Masuk sebagai tamu</span></h1>
  </div>
	<div id="center">
	<div id="contact">
				<form action="form-pesan.php" method="GET">
					<fieldset>
						<table>
							<legend>
								<h2>
									Menampilkan Kereta dari <?php echo $asal; ?> ke <?php echo $tuju; ?> pada <?php echo $tanggal ?>
								</h2>
							</legend>
							<tr>
								<td>
									<strong>NO KA</strong>
								</td>
								<td>
									<strong>NAMA KA</strong>
								</td>
								<td>
									<strong>KELAS</strong>
								</td>
								<td>
									<strong>HARGA</strong>
								</td>
								<td>
									<strong>PESAN</strong>
								</td>
							</tr>
						</table>
						<hr>
						<hr>
						<table>
								<?php
									if(!empty($ambildata))
									{
										while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
										{
											echo "<tr><td> {$row['no_ka']} </td>
											<td> {$row['nama_ka']} </td>
											<td> {$row['kelas']} </td>
											<td> Rp.{$row['harga']} </td>
											<td> <a href='form-pesan.php?noka=$row[no_ka]&asal=$asal&tuju=$tuju&tanggal=$tanggal'><input type='button' value='PESAN' id='submit'></a></tr>";
										}
									}
									else
									{
										echo "<strong>{$error}</strong>";
									}
								?>  
						</table>
						<hr>
						<h4><a href="pesan-tiket.php">Ulangi Pencarian</a></h4>
					</fieldset>
				</form>
			</div>
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
