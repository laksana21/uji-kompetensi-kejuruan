<?php
	
	include('C:\xampp\htdocs\kai\login\session.php');
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	$sql = "SELECT * FROM `pemesanan`";
 
	mysql_select_db('tiket_kai');
	$ambildata = mysql_query( $sql, $koneksi);
	if(! $ambildata )
	{
		die('Gagal ambil data: ' . mysql_error());
	}
	mysql_close($koneksi);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $login_status; ?> - PT. KAI - Pemesanan</title>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
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
        <li><a href="/kai/landing-page-admin/index.php">Home</a></li>
        <li class="active"><a href="#">Pemesanan Tiket</a></li>
        <li><a href="/kai/landing-page-admin/komentar/komentar.php">Komentar</a> </li>
		<li><a href="/kai/landing-page-admin/tambah-ka/index.php">Tambah KA</a> </li>
		<li><a href="/kai/landing-page-admin/user/uji-kebenaran.php">Kelola User</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?> :: <?php echo $login_status; ?></span></h1>
  </div>
	<div id="center">
			<div id="contact">
				<form action="hapus-tiket.php" method="GET">
					<fieldset>
						<table>
							<legend>
								<h2>
									Daftar pelanggan yang memesan tiket
								</h2>
							</legend>
							<tr>
								<td>
									<strong>KODE BOKING</strong>
								</td>
								<td>
									<strong>NAMA PEMESAN</strong>
								</td>
								<td>
									<strong>NAMA KA</strong>
								</td>
								<td>
									<strong>TELEPON</strong>
								</td>
								<td>
									<strong>KORIDOR</strong>
								</td>
								<td>
									<strong>TANGGAL</strong>
								</td>
								<td>
									<strong>BAYAR</strong>
								</td>
							</tr>
							<tr>
								<td colspan="7">
								<hr>
								</td>
								
							</tr>
								<?php
									if(!empty($ambildata))
									{
										while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
										{
											echo "<tr><td> {$row['kode_pesan']} </td>
											<td> {$row['nama']} </td>
											<td> {$row['nama_ka']} </td>
											<td> {$row['telepon']} </td>
											<td> {$row['sta_awal']} Ke {$row['sta_tuju']} </td>
											<td> {$row['tanggal']} </td>
											<td> {$row['aktif']} </td>
											<td> <a href='aktif-tiket.php?kdpesan=$row[kode_pesan]'><input type='button' value='AKTIF' id='submit'></a></tr>
											<td> <a href='hapus-tiket.php?kdpesan=$row[kode_pesan]'><input type='button' value='HAPUS' id='submit'></a></tr>";
										}
									}
									else
									{
										echo "<strong>{$error}</strong>";
									}
								?>  
						</table>
					</fieldset>
				</form>
			</div>
		<div class="lain">
		Dimohon hanya tiket yang telah melewati tanggal yang dihapus!
		</div>
		<div class="lain">
		Data tiket tidak dapat diubah!
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
