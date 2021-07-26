<?php
	include('C:\xampp\htdocs\kai\login\session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pesan Tiket</title>
<link rel="shortcut icon" href="/kai/favicon.ico"/>
<script src="lib/jquery.min.js"></script>
<script src="lib/zebra_datepicker.js"></script>
<link rel="stylesheet" href="lib/css/default.css" />
<script>
    $(document).ready(function(){
        $('#tanggal').Zebra_DatePicker({
            direction: true,
			format: 'd F Y',
			months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
			pair: $('#datepicker-example7-end')
        });
    });
</script>
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
			<div id="contact">
			<form action="pesan.php" method="post">
				<fieldset>
					<table>
						<legend>
							<h2>Silahkan masukkan data secara valid</h2>
						</legend>
						<tr>
							<td colspan="7">Stasiun Asal</td>
							<th></th>
							<td colspan="7">Stasiun Tujuan</td>
						</tr>
						<tr>
							<td colspan="7">
									<select name="stasal" title="stasal">
										<option> </option>
										<option>Daop 1 Jakarta</option>
										<option>Gambir</option>
										<option>Pasar Senen</option>
										<option>Jatinegara</option>
										<option>Jakarta Kota</option>
										<option>Tanah Abang</option>
										<option>Bekasi</option>
										<option>Manggarai</option>
										<option>Merak</option>
										<option>Cikampek</option>
										<option>Serang</option>
										<option>Serpong</option>
										<option>Cilegon</option>
										
										<option> </option>
										<option>Daop 2 Bandung</option>
										<option>Cianjur</option>
										<option>Purwakarta</option>
										<option>Plered</option>
										<option>Padalarang</option>
										<option>Cimahi</option>
										<option>Cimindi</option>
										<option>Bandung</option>
										<option>Kiaracondong</option>
										<option>Cimekar</option>
										<option>Rancaekek</option>
										<option>Cicalengka</option>
										<option>Leles</option>
										<option>Cibatu</option>
										<option>Cipeundeuy</option>
										<option>Tasikmalaya</option>
										<option>Ciamis</option>
										<option>Banjar</option>
										
										<option> </option>
										<option>Daop 3 Cirebon</option>
										<option>Brebes</option>
										<option>Tanjung</option>
										<option>Losari</option>
										<option>Babakan</option>
										<option>Cirebon</option>
										<option>Cirebon Prujakan</option>
										<option>Arjawinangun</option>
										<option>Jatibarang</option>
										<option>Haurgeulis</option>
										
										<option> </option>
										<option>Daop 4 Semarang</option>
										<option>Tegal</option>
										<option>Pemalang</option>
										<option>Pekalongan</option>
										<option>Weleri</option>
										<option>Semarang Poncol</option>
										<option>Semarang Tawang</option>
										<option>Ambarawa</option>
										<option>Ngrombo</option>
										<option>Jambon</option>
										<option>Randublatung</option>
										<option>Cepu</option>
										<option>Bojonegoro</option>
										
										<option> </option>
										<option>Daop 5 Purwokerto</option>
										<option>Purworejo</option>
										<option>Kutoarjo</option>
										<option>Kebumen</option>
										<option>Karanganyar</option>
										<option>Gombong</option>
										<option>Kroya</option>
										<option>Maos</option>
										<option>Gumilir</option>
										<option>Cilacap</option>
										<option>Sidareja</option>
										<option>Purwokerto</option>
										<option>Bumiayu</option>
										<option>Slawi</option>
										
										<option> </option>
										<option>Daop 6 Yogyakarta</option>
										<option>Wates</option>
										<option>Yogyakarta</option>
										<option>Lempuyangan</option>
										<option>Klaten</option>
										<option>Ceper</option>
										<option>Purwosari</option>
										<option>Solo Balapan</option>
										<option>Srowot</option>
										<option>Solo Jebres</option>
										<option>Sragen</option>
										<option>Salem</option>
										<option>Kedung Banteng</option>
										<option>Brambanan</option>
										<option>Patukan</option>
										<option>Delanggu</option>
										<option>Jenar</option>
										<option>Sentolo</option>
										<option>Maguwo</option>
										
										<option> </option>
										<option>Daop 7 Madiun</option>
										<option>Walikukun</option>
										<option>Paron</option>
										<option>Madiun</option>
										<option>Caruban</option>
										<option>Nganjuk</option>
										<option>Kertosono</option>
										<option>Jombang</option>
										<option>Kediri</option>
										<option>Tulungagung</option>
										
										<option> </option>
										<option>Daop 8 Surabaya</option>
										<option>Surabaya Pasar Turi</option>
										<option>Surabaya Gubeng</option>
										<option>Surabaya Kota</option>
										<option>Malang</option>
										<option>Lamongan</option>
										<option>Babat</option>
										<option>Wonokromo</option>
										<option>Sepanjang</option>
										<option>Mojokerto</option>
										<option>Sidoarjo</option>
										<option>Bangil</option>
										<option>Lawang</option>
										<option>Kepanjen</option>
										<option>Blitar</option>
										<option>Wlingi</option>
										
										<option> </option>
										<option>Daop 9 Jember</option>
										<option>Banyuwangi</option>
										<option>Argopuro</option>
										<option>Karangasem</option>
										<option>Rogojampi</option>
										<option>Temuguruh</option>
										<option>Kalisetail</option>
										<option>Glenmore</option>
										<option>Kalibaru</option>
										<option>Kalisat</option>
										<option>Bondowoso</option>
										<option>Jember</option>
										<option>Mangli</option>
										<option>Rambipuji</option>
										<option>Bangsalsari</option>
										<option>Tanggul</option>
										<option>Jatiroto</option>
										<option>Klakah</option>
										<option>Probolinggo</option>
										<option>Pasuruan</option>
										<option>Sumber Wadung</option>
							</td>
							<td></td>
							<td colspan="7">
									<select name="sttuju" title="sttuju">
										<option> </option>
										<option>Daop 1 Jakarta</option>
										<option>Gambir</option>
										<option>Pasar Senen</option>
										<option>Jatinegara</option>
										<option>Jakarta Kota</option>
										<option>Tanah Abang</option>
										<option>Bekasi</option>
										<option>Manggarai</option>
										<option>Merak</option>
										<option>Cikampek</option>
										<option>Serang</option>
										<option>Serpong</option>
										<option>Cilegon</option>
										
										<option> </option>
										<option>Daop 2 Bandung</option>
										<option>Cianjur</option>
										<option>Purwakarta</option>
										<option>Plered</option>
										<option>Padalarang</option>
										<option>Cimahi</option>
										<option>Cimindi</option>
										<option>Bandung</option>
										<option>Kiaracondong</option>
										<option>Cimekar</option>
										<option>Rancaekek</option>
										<option>Cicalengka</option>
										<option>Leles</option>
										<option>Cibatu</option>
										<option>Cipeundeuy</option>
										<option>Tasikmalaya</option>
										<option>Ciamis</option>
										<option>Banjar</option>
										
										<option> </option>
										<option>Daop 3 Cirebon</option>
										<option>Brebes</option>
										<option>Tanjung</option>
										<option>Losari</option>
										<option>Babakan</option>
										<option>Cirebon</option>
										<option>Cirebon Prujakan</option>
										<option>Arjawinangun</option>
										<option>Jatibarang</option>
										<option>Haurgeulis</option>
										
										<option> </option>
										<option>Daop 4 Semarang</option>
										<option>Tegal</option>
										<option>Pemalang</option>
										<option>Pekalongan</option>
										<option>Weleri</option>
										<option>Semarang Poncol</option>
										<option>Semarang Tawang</option>
										<option>Ambarawa</option>
										<option>Ngrombo</option>
										<option>Jambon</option>
										<option>Randublatung</option>
										<option>Cepu</option>
										<option>Bojonegoro</option>
										
										<option> </option>
										<option>Daop 5 Purwokerto</option>
										<option>Purworejo</option>
										<option>Kutoarjo</option>
										<option>Kebumen</option>
										<option>Karanganyar</option>
										<option>Gombong</option>
										<option>Kroya</option>
										<option>Maos</option>
										<option>Gumilir</option>
										<option>Cilacap</option>
										<option>Sidareja</option>
										<option>Purwokerto</option>
										<option>Bumiayu</option>
										<option>Slawi</option>
										
										<option> </option>
										<option>Daop 6 Yogyakarta</option>
										<option>Wates</option>
										<option>Yogyakarta</option>
										<option>Lempuyangan</option>
										<option>Klaten</option>
										<option>Ceper</option>
										<option>Purwosari</option>
										<option>Solo Balapan</option>
										<option>Srowot</option>
										<option>Solo Jebres</option>
										<option>Sragen</option>
										<option>Salem</option>
										<option>Kedung Banteng</option>
										<option>Brambanan</option>
										<option>Patukan</option>
										<option>Delanggu</option>
										<option>Jenar</option>
										<option>Sentolo</option>
										<option>Maguwo</option>
										
										<option> </option>
										<option>Daop 7 Madiun</option>
										<option>Walikukun</option>
										<option>Paron</option>
										<option>Madiun</option>
										<option>Caruban</option>
										<option>Nganjuk</option>
										<option>Kertosono</option>
										<option>Jombang</option>
										<option>Kediri</option>
										<option>Tulungagung</option>
										
										<option> </option>
										<option>Daop 8 Surabaya</option>
										<option>Surabaya Pasar Turi</option>
										<option>Surabaya Gubeng</option>
										<option>Surabaya Kota</option>
										<option>Malang</option>
										<option>Lamongan</option>
										<option>Babat</option>
										<option>Wonokromo</option>
										<option>Sepanjang</option>
										<option>Mojokerto</option>
										<option>Sidoarjo</option>
										<option>Bangil</option>
										<option>Lawang</option>
										<option>Kepanjen</option>
										<option>Blitar</option>
										<option>Wlingi</option>
										
										<option> </option>
										<option>Daop 9 Jember</option>
										<option>Banyuwangi</option>
										<option>Argopuro</option>
										<option>Karangasem</option>
										<option>Rogojampi</option>
										<option>Temuguruh</option>
										<option>Kalisetail</option>
										<option>Glenmore</option>
										<option>Kalibaru</option>
										<option>Kalisat</option>
										<option>Bondowoso</option>
										<option>Jember</option>
										<option>Mangli</option>
										<option>Rambipuji</option>
										<option>Bangsalsari</option>
										<option>Tanggul</option>
										<option>Jatiroto</option>
										<option>Klakah</option>
										<option>Probolinggo</option>
										<option>Pasuruan</option>
										<option>Sumber Wadung</option>
							</td>
						</tr>
						<tr>
							<td>Tanggal Pemberangkatan</td>
						</tr>	
						<tr>
							<td>
							<input type="text" name="tanggal" id="tanggal"/>
							</td>
						</tr>
					</table>
					<input type="submit" value="Cari Tiket" title="Pesan" id="submit">
					<a href="cek-kode.php"><input type="button" value="Cek Kode Booking" title="cek" id="submit"></a>
				</fieldset>
			</form>
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
