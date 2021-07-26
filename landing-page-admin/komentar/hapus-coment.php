<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	
	$nama=$_GET['nama'];
	$sql = "DELETE FROM `tiket_kai`.`komentar` WHERE `komentar`.`nama` = '$nama'";
	
	mysql_query($sql);
	header('location: /kai/landing-page-admin/komentar/komentar.php');

?>