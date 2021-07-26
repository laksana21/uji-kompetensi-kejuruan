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
	if ($login_status == "Admin")
	{
		$sql = "SELECT * FROM `user`";
 
		mysql_select_db('tiket_kai');
		$ambildata = mysql_query( $sql, $koneksi);
		if(! $ambildata )
		{
			die('Gagal ambil data: ' . mysql_error());
		}
		mysql_close($koneksi);
	}
	else
	{
		header('location: bukan-admin.php');
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $login_status; ?> - PT. KAI - User</title>
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
<div id="wrap1">
  <div id="header">
    <div id="topmenu">
      <ul>
        <li><a href="/kai/landing-page-admin/index.php">Home</a></li>
        <li><a href="/kai/landing-page-admin/pemesanan/pemesanan.php">Pemesanan Tiket</a></li>
        <li><a href="/kai/landing-page-admin/komentar/komentar.php">Komentar</a> </li>
		<li><a href="/kai/landing-page-admin/tambah-ka/index.php">Tambah KA</a> </li>
		<li class="active"><a href="#">Kelola User</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?> :: <?php echo $login_status; ?></span></h1>
  </div>
	<div id="center">
			<div id="contact">
				<form action="hapus-tiket.php" method="GET">
					<fieldset>
						<table width="690px">
							<legend>
								<h2>
									Daftar data dari user lain
								</h2>
							</legend>
							<tr>
								<td>
									<h3>USER ID</h3>
								</td>
								<td>
									<h3>NAMA</h3>
								</td>
								<td>
									<h3>USERNAME</h3>
								</td>
								<td>
									<h3>PASSWORD</h3>
								</td>
								<td>
									<h3>KATEGORI</h3>
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
											echo "<tr><td> <strong> {$row['user_id']} </strong> </td>
											<td> <strong> {$row['nama']} </strong> </td>
											<td> <strong> {$row['username']} </strong> </td>
											<td> <strong> {$row['password']} </strong> </td>
											<td> <strong> {$row['login_status']} </strong> </td>
											<td> <a href='hapus-user.php?id=$row[user_id]'><input type='button' value='HAPUS' id='submit'></a></td>
											<td> <a href='user-edit.php?id=$row[user_id]'><input type='button' value='EDIT' id='submit'></a></td></tr>";
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
		BERBUDI PEKERTI, BERPRESTASI, KOMPETITIF DI ERA GLOBAL BERDASARKAN IMAN DAN TAQWA
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
