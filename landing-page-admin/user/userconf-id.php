<?php
	
	include ("koneksi.php");
	$db = mysql_select_db("tiket_kai", $connection);
	session_start();// Memulai Session
	
	$connection = mysql_connect("localhost", "root", "");
	
	$id_check=$_SESSION['id'];
	$id_sql=mysql_query("select nama from user where user_id='$id_check'", $connection);
	$idraw = mysql_fetch_assoc($id_sql);
	$id_session =$idraw['user_id'];
	if(!isset($id_session)){
		mysql_close($connection); // Menutup koneksi
		header('Location: user.php'); // Mengarahkan ke Home Page
	}
	$usid=$_GET['id'];
	
	header('location: user-edit.php?usid=$usid');
?> 