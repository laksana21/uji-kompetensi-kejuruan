<?php
	session_start(); // Memulai Session
	$error=''; // Variabel untuk menyimpan pesan error
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid";
		}
		else
		{
			// Variabel username dan password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// Membangun koneksi ke database
			$connection = mysqli_connect("localhost", "root", "");
			// Mencegah mysql injection 
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($connection, $username);
			$password = mysqli_real_escape_string($connection, $password);
			// Seleksi Database
			$db = mysqli_select_db($connection, "tiket_kai");
			// SQL query untuk memeriksa apakah karyawan terdapat di database?
			$query = mysqli_query($connection, "select * from user where password='$password' AND username='$username'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: landing.php"); // Mengarahkan ke halaman profil
			} else {
				header("location: salah.php");
				$error = "Username atau Password belum terdaftar";
			}
			mysqli_close($connection); // Menutup koneksi
		}
	}
?>