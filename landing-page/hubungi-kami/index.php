<?php
include('C:\xampp\htdocs\kai\login\session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<title>Hubungi Kami</title>
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
		<li><a href="/kai/landing-page/tiket/pesan-tiket.php">Tiket</a> </li>
		<li class="active"><a>Kontak</a> </li>
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
							<h2>Silahkan masukkan komentar atau saran anda</h2>
						</legend>
						<tr>
							<td colspan="4">Nama</td>
							<td> : </td>
							<td><input class="textfield" value="<?php echo $login_session; ?>" name="nama" id="name" type="text" /></td>
						</tr>
						<tr>
							<td colspan="4">Email</td>
							<td> : </td>
							<td colspan="7"><input class="textfield" value="<?php echo $email; ?>" name="email" id="name" type="text"/></td>
						</tr>
						<tr>
							<td colspan="4">Subyek</td>
							<td> : </td>
							<td colspan="7">
									<select name="subyek" title="subyek">
										<option>Kritik</option>
										<option>Saran</option>
										<option>Komentar</option>
										<option>Pertanyaan</option>
										<option>Lain-lain</option>
							</td>
						</tr>
						<tr>
							<td colspan="4">Komentar</td>
							<td> : </td>
							<td>
								<textarea class="textfield" id="Comments" name="komentar" cols="45" rows="4"></textarea>
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
		Balasan akan kami kirim melalui email yang disertakan.
		</div>
		<div class="Lain">
		Atau dapat hubungi Admin di nomor 0852 9270 2172 untuk perubahan data.
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
