<?php
	include ("koneksi.php");

	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$subyek=$_POST['subyek'];
	$komentar=$_POST['komentar'];
	if (!empty($nama)){
		if (!empty($email)){
			if (!empty($komentar)){
				mysql_query("INSERT INTO `tiket_kai`.`komentar` (`nama`, `email`, `subyek`, `komentar`) VALUES ('$nama', '$email', '$subyek', '$komentar')");
				header("Location: selesai.php");
			}else{
				echo "Anda belum mengisi komentar";
			}
		}else{
			echo "Anda belum mengisikan email";
		}
	}else{
		echo "Anda belum mengisi nama";
	}
?>