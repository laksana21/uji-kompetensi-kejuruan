<?php
	include ("koneksi.php");
	
	function rand_string( $length ) {
	$chars = "0123456789";	

	$size = strlen( $chars );
	$str = "";
	for( $i = 0; $i < $length; $i++ ) {
		$str.= $chars[ rand( 0, $size - 1 ) ];
	}
	return $str;
}

	$id=rand_string(4);
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password1=$_POST['password'];
	$password2=$_POST['reppass'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$negara=$_POST['negara'];
	$pos=$_POST['pos'];
	$email=$_POST['email'];
	if (!empty($nama)){
		if (!empty($email)){
			$sql = mysql_query("SELECT * FROM user WHERE email='".$email."'");
			$hasil = mysql_fetch_array($sql);
			if ($hasil['email'] != $email){
				if (!empty($username)){
					$sql = mysql_query("SELECT * FROM user WHERE username='".$username."'");
					$hasil = mysql_fetch_array($sql);
					if ($hasil['username'] != $username){
						if (!empty($password1)){
							if (!empty($password2)){
								if ($password1 == $password2){
									mysql_query("INSERT INTO `tiket_kai`.`user` (`user_id`, `nama`, `username`, `password`, `alamat`, `kota`, `negara`, `kode_pos`, `email`, `login_status`) VALUES ('$id', '$nama', '$username', '$password1', '$alamat', '$kota', '$negara', '$pos', '$email', 'Guest')");
									echo "Pendaftaran Sukses . . Silahkan <a href='/kai/login/index.php'>login</a>";
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
						echo "Username telah ada yang menggunakan";
					}
				}else{
					echo "Anda belum mengisikan username";
				}
			}else{
				echo "Email telah digunakan";
			}
		}else{
			echo "Anda belum mengisikan email";
		}
	}else{
		echo "Anda belum mengisi nama";
	}
?>