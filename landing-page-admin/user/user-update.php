<?php
	include ("koneksi.php");
		
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$negara=$_POST['negara'];
	$pos=$_POST['pos'];
	$email=$_POST['email'];
	$status=$_POST['status'];
	if (!empty($nama)){
		if (!empty($email)){
			$sql = mysql_query("SELECT * FROM user WHERE email='".$email."'");
			$hasil = mysql_fetch_array($sql);
				if (!empty($username)){
					$sql = mysql_query("SELECT * FROM user WHERE username='".$username."'");
					$hasil = mysql_fetch_array($sql);
						if (!empty($password)){
							if (!empty($password)){
								if ($password == $password){
									mysql_query("UPDATE `tiket_kai`.`user` SET `user_id` = '$id', `nama` = '$nama', `username` = '$username', `password` = '$password', `alamat` = '$alamat', `kota` = '$kota', `negara` = '$negara', `kode_pos` = '$pos', `email` = '$email', `login_status` = '$status' WHERE `user`.`user_id` = $id;");
									header("Location: uji-kebenaran.php");
								}else{
									echo "Silahkan ulangi password dengan benar";
								}
							}else{
								echo "Anda belum mengulangi password";
							}
						}else{
							echo "Anda belum mengisikan password";
						}
				}else{
					echo "Anda belum mengisikan username";
				}
			
		}else{
			echo "Anda belum mengisikan email";
		}
	}else{
		echo "Anda belum mengisi nama";
	}
?>