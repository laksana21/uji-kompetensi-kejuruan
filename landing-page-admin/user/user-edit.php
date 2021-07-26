<?php

	include('C:\xampp\htdocs\kai\login\session.php');
	$id=$_GET['id'];
	
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	if ($id == 1)
	{
		header('location: terlarang.php');
	}
	else
	{
		if ($login_status == "Admin")
		{
			$sql = "SELECT * FROM `user` WHERE user_id='$id'";

			mysql_select_db('tiket_kai');
			$ambildata = mysql_query( $sql, $koneksi);
			while($row = mysql_fetch_array($ambildata, MYSQL_ASSOC))
			{
				$id="{$row['user_id']}";
				$nama="{$row['nama']}";
				$username="{$row['username']}";
				$password="{$row['password']}";
				$alamat="{$row['alamat']}";
				$kota="{$row['kota']}";
				$negara="{$row['negara']}";
				$kdpos="{$row['kode_pos']}";
				$email="{$row['email']}";
				$logstatus="{$row['login_status']}";
			}
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
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $login_status; ?> - PT. KAI - Edit User</title>
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
		<li class="active"><a href="/kai/landing-page-admin/user/uji-kebenaran.php">Kelola User</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
    <h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?> :: <?php echo $login_status; ?></span></h1>
  </div>
<div id="center">
		<div class="contactform">
			<form action="user-update.php" method="post">
				<fieldset>
					<table>
						<legend>
							<h2>Data berikut dapat diubah. Namun, <strong>Jangan Mengubah ID!</strong></h2>
						</legend>
						<tr>
							<td><h3>ID</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $id; ?>" placeholder="Nomor ID" name="id" title="id" size="60"></td>
						</tr>
						<tr>
							<td><h3>Nama</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $nama; ?>" placeholder="Nama lengkap" name="nama" title="name" size="60"></td>
						</tr>
						<tr>
							<td><h3>Username</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $username; ?>" placeholder="Username" name="username" title="username" size="60"></td>
						</tr>
						<tr>
							<td><h3>Password</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $password; ?>" placeholder="Password" name="password" title="password" size="60"></td>
						</tr>
						<tr>
							<td><h3>Alamat</h3></td>
							<td> : </td>
							<td>
								<input class="textfield" cols="45" rows="4" value="<?php echo $alamat; ?>" placeholder="Alamat rumah" name="alamat" title="alamat"></textarea>
							</td>
						</tr>
						<tr>
							<td><h3>Kota</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $kota; ?>" placeholder="Kota" name="kota" title="kota" size="60"></td>
						</tr>
						<tr>
							<td><h3>Negara</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $negara; ?>" placeholder="Negara" name="negara" title="negara" size="60"></td>
						</tr>
						<tr>
							<td><h3>Kode Pos</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $kdpos; ?>" placeholder="Kode Pos" name="pos" title="pos" size="60"></td>
						</tr>
						<tr>
							<td><h3>Email</h3></td>
							<td> : </td>
							<td><input class="textfield" type="text" value="<?php echo $email; ?>" placeholder="Email" name="email" title="email" size="60"></td>
						</tr>
						<tr>
							<td><h3>Login Status</h3></td>
							<td> : </td>
							<td>
							<select name="status" title="status">
										<option>Guest</option>
										<option>Staff</option>
										<option>Admin</option>
							</td>
						</tr>
							<td>
								<input type="submit" class="button" value="UPDATE" title="Mendaftar" onClick="alert('Klik OK untuk melanjutkan.')" >
							</td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="Staff">
		BERBUDI PEKERTI, BERPRESTASI, KOMPETITIF DI ERA GLOBAL BERDASARKAN IMAN DAN TAQWA
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
