<?php
include('C:\xampp\htdocs\kai\login\session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<title>Tambah Rangkaian</title>
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
        <li><a href="/kai/landing-page-admin/index.php">Home</a></li>
        <li><a href="/kai/landing-page-admin/pemesanan/pemesanan.php">Pemesanan Tiket</a></li>
        <li><a href="/kai/landing-page-admin/komentar/komentar.php">Komentar</a> </li>
		<li class="active"><a href="#">Tambah KA</a> </li>
		<li><a href="/kai/landing-page-admin/user/uji-kebenaran.php">Kelola User</a> </li>
      </ul>
    </div>
    <div class="clear"></div>
<h1 id="sitename"><a href="/kai/login/logout.php">Logout</a><span class="desc"><?php echo $login_session; ?></span></h1>
  </div>
<div id="center">
		<div class="contactform">
			<form action="kirim.php" method="post">
				<fieldset>
					<table>
						<legend>
							<h2>Pastikan data Kereta sudah sesuai dari PT. KAI</h2>
						</legend>
						<tr>
							<td colspan="4">No. KA</td>
							<td> : </td>
							<td><input class="textfield" name="noka" id="name" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4">Nama KA</td>
							<td> : </td>
							<td colspan="7"><input class="textfield" name="naka" id="name" type="text"/></td>
						</tr>
						<tr>
							<td colspan="4">Jurusan</td>
							<td> : </td>
							<td colspan="7"><input class="textfield" name="jurusan" id="name" type="text"/></td>
						</tr>
						<tr>
							<td colspan="4">Kelas</td>
							<td> : </td>
							<td colspan="7">
									<select name="kelas" title="subyek">
										<option></option>
										<option>Ekonomi</option>
										<option>Bisnis</option>
										<option>Eksekutif</option>
							</td>
						</tr>
						<tr>
							<td colspan="4">Harga</td>
							<td> : </td>
							<td colspan="7"><input class="textfield" name="harga" id="name" type="text"/></td>
						</tr>
						<tr>
							<td colspan="4">Pemberhentian</td>
							<td> : </td>
							<td>
								<textarea class="textfield" id="Comments" name="stasiun" cols="45" rows="4"></textarea>
							</td>
						</tr>
						<tr>
							<td>
							<input name="Submit" type="submit" id="Submit" class="button" value="Submit" />
							<input name="Reset" type="reset" id="Reset" class="button" value="Reset" />
							</td>
						</tr>
					</table>
				</fieldset>
			<form>
		</div>
		<div class="Lain">
		Data ini harus sesuai dari PT. Kereta Api Indonesia
		</div>
		<div class="Lain">
		Apabila ada kesalahan, hubungi Admin segera untuk perubahan data
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
