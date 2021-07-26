<?php
	// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
	$connection = mysqli_connect("localhost", "root", "");
	// Seleksi Database
	$db = mysqli_select_db($connection, "tiket_kai");
	session_start();// Memulai Session
	// Menyimpan Session
	$user_check=$_SESSION['login_user'];
	// Ambil email
	$ml_sql=mysqli_query($connection, "select email from user where username='$user_check'");
	$mal = mysqli_fetch_assoc($ml_sql);
	$email =$mal['email'];
	// Ambil kategori
	$cat_sql=mysqli_query($connection, "select login_status from user where username='$user_check'");
	$now = mysqli_fetch_assoc($cat_sql);
	$login_status =$now['login_status'];
	// Ambil id
	$id_sql=mysqli_query($connection, "select user_id from user where username='$user_check'");
	$rid = mysqli_fetch_assoc($id_sql);
	$login_id =$rid['user_id'];
	// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
	$ses_sql=mysqli_query($connection, "select nama from user where username='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['nama'];
	if(!isset($login_session)){
		mysqli_close($connection); // Menutup koneksi
		header('Location: index.php'); // Mengarahkan ke Home Page
	}
?>