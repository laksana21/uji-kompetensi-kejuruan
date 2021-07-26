<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	
	$kdpesan=$_GET['kdpesan'];
	$sql = "DELETE FROM `tiket_kai`.`pemesanan` WHERE `pemesanan`.`kode_pesan` = '$kdpesan'";
	
	mysql_query($sql);
	header('location: /kai/landing-page-admin/pemesanan/pemesanan.php');

?>