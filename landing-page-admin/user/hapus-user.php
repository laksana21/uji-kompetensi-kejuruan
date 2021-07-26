<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $koneksi )
	{
		die('Gagal Koneksi: ' . mysql_error());
	}
	
	$id=$_GET['id'];
	if ($id == 1)
	{
		header('location: terlarang.php');
	}
	else
	{
		$sql = "DELETE FROM `tiket_kai`.`user` WHERE `user`.`user_id` = '$id'";
	
		mysql_query($sql);
		header('location: /kai/landing-page-admin/user/user.php');
	}
?>