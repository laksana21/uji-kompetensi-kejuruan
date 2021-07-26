<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	mysql_select_db('tiket_kai');
	$kode=$_GET['kdpesan'];
	$sql = "UPDATE `pemesanan` SET `aktif` = 'sudah' WHERE `pemesanan`.`kode_pesan` = '$kode'";
	
	mysql_query($sql);
	
	header('location: /kai/landing-page-admin/pemesanan/pemesanan.php');

?>