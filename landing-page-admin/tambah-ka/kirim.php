<?php
	include ("koneksi.php");

	$noka=$_POST['noka'];
	$naka=$_POST['naka'];
	$jurusan=$_POST['jurusan'];
	$kelas=$_POST['kelas'];
	$harga=$_POST['harga'];
	$stasiun=$_POST['stasiun'];
	if (!empty($noka)){
		if (!empty($naka)){
			if (!empty($jurusan)){
				if (!empty($kelas)){
					if (!empty($harga)){
						if (!empty($stasiun)){
							mysql_query("INSERT INTO `tiket_kai`.`kereta` (`no_ka`, `nama_ka`, `jurusan`, `kelas`, `harga`, `stasiun`) VALUES ('$noka', '$naka', '$jurusan', '$kelas', '$harga', '$stasiun')");
							header("Location: selesai.php");
						}else{
							echo "Anda belum mengisi Stasiun Pemberhentian";
						}
					}else{
						echo "Anda belum mengisi Harga";
					}
				}else{
					echo "Anda belum mengisi kelas";
				}
			}else{
				echo "Anda belum mengisi Jurusan";
			}
		}else{
			echo "Anda belum mengisikan Nama Kereta";
		}
	}else{
		echo "Anda belum mengisi Nomor KA";
	}
?>